<?php
namespace app\addons\card\plat\controllers;
use app\addons\card\plat\controllers\PlatController;
use Yii;
use app\vendor\org\FileUpload;
/**
 * Default controller for the `plat` module
 */
class DefaultController extends PlatController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $layout = "layout1";
    public function beforeAction($action)
    {
        $currentaction = $action->id;
        $novalidactions = ['upload'];
        if(in_array($currentaction,$novalidactions)) {
            $action->controller->enableCsrfValidation = false;
        }
        parent::beforeAction($action);
        return true;
    }
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionHomepage()
    {
        //首页
        return $this->render('homepage');
    }
    public function actionCreate_card()
    {
        //发卡
        return $this->render('create_card');
    }
    public function actionCard_list()
    {
        //发布的卡
        return $this->render('card_list');
    }
    public function actionCreate_ticket()
    {
        //发券
        return $this->render('create_ticket');
    }
    public function actionTicket_list()
    {
        //发布的券
        return $this->render('ticket_list');
    }
    public function actionCard_varify()
    {
        //卡券核销
        return $this->render('card_varify');
    }
    public function actionReceived_record()
    {
        //领卡记录
        return $this->render('received_record');
    }
    public function actionLogout()
    {
        //退出登录
        $session = Yii::$app->session;
        unset($session['user']);
        $this->redirect('index.php?r=publics/default/login');
    }
    public function actionTest()
    {
        $session = Yii::$app->session;
        echo $session['user']['uid'];
    }
    public function actionUpload()
    {
        //文件上传
         if(Yii::$app->session['img']){
            unlink(Yii::$app->session['img']);
            $session = Yii::$app->session;
            $session->remove('img');
        }
        $up = new FileUpload();
        //设置属性（上传的位置、大小、类型、设置文件名是否要随机生成）
        $path =  "./images/";
        $up->set("path",$path);
        $up->set("maxsize",2000000); //kb
        $up->set("allowtype",array("gif","png","jpg","jpeg"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小
        $up->set("israndname",true);//true:由系统命名；false：保留原文件名

        //使用对象中的upload方法，上传文件，方法需要传一个上传表单的名字name：upload_file
        //如果成功返回true，失败返回false
        if($up->upload("upload_file")){
            $session = Yii::$app->session;
            session_set_cookie_params(120);
            $session['img'] = $path.$up->getFileName();

            echo $path.$up->getFileName();
            die;
        }else{
            echo $up->getErrorMsg();
            die;
        }
    }
}
