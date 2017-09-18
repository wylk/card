<?php

namespace app\addons\card\index\controllers;

use yii\web\Controller;

/**
 * Default controller for the `index` module
 */
class DefaultController extends Controller
{
    public $layout = false;
    public function actionIndex()
    {
    	echo 12334343;die;
        return $this->render('index');
    }
}
