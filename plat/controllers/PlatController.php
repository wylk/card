<?php
namespace app\addons\card\plat\controllers;
use app\addons\card\common\CommonController;
use Yii;
class PlatController extends CommonController
{
    public $uid;
    public function init()
    {
        parent::init();
        $session = Yii::$app->session;
        if(isset($session->isActive)){
           //开启session
            $view = Yii::$app->view;
            $view->params['username'] = $session['user']['username'];
            $view->params['is_login'] = $session['user']['is_login'];
            if(isset($session['user']['is_login'])){
                $this->uid = $session['user']['uid'];
            }
        }else
        {
            $session->open();
        }
        if(!isset($session['user']['is_login']))
        {
            $this->redirect('index.php?r=publics/default/login');
        }
    }
}