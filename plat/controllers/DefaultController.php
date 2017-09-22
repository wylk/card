<?php
namespace app\addons\card\plat\controllers;
use app\addons\card\plat\controllers\PlatController;
use yii\web\Controller;
use Yii;
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
}
