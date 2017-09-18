<?php

namespace app\addons\card\wap\controllers;

use yii\web\Controller;

/**
 * Default controller for the `wap` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout=false;
        return $this->render('index');
    }
}
