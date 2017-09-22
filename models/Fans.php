<?php
namespace app\addons\card\models;
use yii\db\ActiveRecord;
use Yii;
class Fans extends ActiveRecord
{
    public $repass;
    public $rememberMe;
    public $uid;
    public static function tableName()
    {
        return "{{%fans}}";
    }
    public function attributeLabels()
    {
        return [
            'password'=>'密码'

        ];
    }
    //定义规则
    public function rules()
    {
        return [
            ['username','required','message'=>'用户名不能为空','on'=>['reg','login']],
            ['username','unique','message'=>'用户名已存在','on'=>['reg']],
            ['password','required','message'=>'密码不能为空','on'=>['reg','login']],
            ['password','string','min'=>6,'max'=>18,'message'=>'密码必须是6-18位字符','on'=>['reg']],
            ['password','validatePass','on'=>'login'],
            ['repass','required','message'=>'确认密码不能为空','on'=>['reg']],
            ['repass','compare','compareAttribute'=>'password','message'=>'两次密码输入不一致','on'=>['reg']],
            ['phone','required','message'=>'手机号码不能为空','on'=>['reg']],
            ['phone','match','pattern'=>'/^1[3|4|5|7|8][0-9]{9}$/','message'=>'手机号码格式不正确','on'=>['reg']],
            ['email','required','message'=>'电子邮件不能为空','on'=>['reg']],
            ['email','email','message'=>'电子邮件格式不正确','on'=>['reg']],
            ['email','unique','message'=>'电子邮件已存在','on'=>['reg']]
        ];
    }
    public function register($data)
    {
        $this->scenario= 'reg';
        if($this->load($data) && $this->validate()){
            $this->addtime = time();
            $this->password = $this->setPassword($this->password);
            if($this->save(false)){
                //做点有意义的事儿
                $id = $this->attributes['id'];
                $session = Yii::$app->session;
                $session['user']=[
                    'is_login'=>1,
                    'username'=>$this->username,
                    'uid'=>$id
                ];
                return (bool)$session['user']['is_login'];
            }
            return false;
        }
        return false;
    }
    public function validatePass()
    {
        //验证密码
        if(!$this->hasErrors()){
            $data = self::find()->where('username = :user',[':user'=>$this->username])->asArray()->one();
            if (!$data && !$this->validatePassword($this->password)) {
                $this->addError('username','用户名或密码错误');
            } else {
                $this->uid = $data['id'];
            }
        }
    }
    public function setPassword($password)
    {
        return Yii::$app->getSecurity()->generatePasswordHash($password);
    }
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }
    public function login($data)
    {
        $this->scenario = 'login';
        if($this->load($data) && $this->validate()){
            //做点有意义的事儿
            $lifetime = $this->rememberMe ? 3600*24 : 0;
            $session = Yii::$app->session;
            session_set_cookie_params($lifetime);
            $session['user'] = [
                'username'=>$this->username,
                'is_login'=>1,
                'uid'=>$this->uid
            ];
            return (bool)$session['user']['is_login'];
        }
        return false;
    }
}