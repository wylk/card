<?php

namespace app\addons\card\admin\controllers;
use app\addons\card\common\CommonController;
use app\addons\card\models\LoginForm;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\addons\card\models\Menu;
use Yii;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends CommonController
{
    public function actionIndex()
    {
        $this->layout = "layout1";
        $user_id=Yii::$app->user->identity->getId();
        $user_info = Yii::$app->authManager->getRolesByUser($user_id);
        //var_dump($user_info);die;
        $menu = new Menu();
        $menu = $menu->getLeftMenuList();
        return $this->render('index',[
            'menu' => $menu,
            'user_info' => key($user_info)
        ]);
    }
    //平台登录
    public function actionLogin()
    {
        $this->layout = "layout1";
        if (!Yii::$app->user->isGuest) {
            //Yii::$app->user->logout();
           header('Location:?r=admin/default/index');die;
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $model->loginLog();
            header('Location:?r=admin/default/index');die;
            //return $this->goBack();
        } else {
            return $this->render('login', ['model' => $model]);         
        }
    }
}
