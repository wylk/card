<?php
namespace app\addons\card\publics\controllers;
use yii\web\Controller;
use app\addons\card\common\CommonController;
use app\addons\card\models\Fans;
use Yii;
/**
 * Default controller for the `Publics` module
 */
class DefaultController extends CommonController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionLogin()
    {
        $model = new Fans;
        if(Yii::$app->request->isPost)
        {
            $post = Yii::$app->request->post();
            if($model->login($post)){
                $this->redirect('index.php?r=plat/default/homepage');
            }
        }
        return $this->render('login',['model'=>$model]);
    }
    public function actionRegister()
    {
        $model = new Fans;
        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            if($model->register($post)){
                $this->redirect('index.php?r=plat/default/homepage');
                Yii::$app->end();
            }
        }
        return $this->render('register',['model'=>$model]);
    }
}
