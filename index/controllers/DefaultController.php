<?php

namespace app\addons\card\index\controllers;

use yii\web\Controller;
use app\addons\card\common\CommonController;

/**
 * Default controller for the `index` module
 */
class DefaultController extends CommonController
{
    
    public function actionIndex()
    {
    	$this->test();
    	die;
    	dump(['oere'=>3444]);
    	die;
        return $this->render('index');
    }

}
