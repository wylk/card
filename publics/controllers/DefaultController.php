<?php
namespace app\addons\card\publics\controllers;
use yii\web\Controller;
use app\addons\card\plat_common\PlatController;

/**
 * Default controller for the `Publics` module
 */
class DefaultController extends PlatController
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
        return $this->render('login');
    }
    public function actionRegister()
    {

        return $this->render('register');
    }
}
