<?php

namespace app\addons\card\plat\controllers;
use app\addons\card\common\CommonController;
use yii\web\Controller;

/**
 * Default controller for the `plat` module
 */
class MyselfController extends CommonController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $layout = "layout1";
    public function actionReceived_card()
    {
        // 领取的卡
        return $this->render('received_card');
    }
    public function actionReceived_ticket()
    {
        // 领取的券
        return $this->render('received_ticket');
    }
    public function actionChecked_card()
    {
        // 核销的卡券
        return $this->render('checked_card');
    }
    public function actionMyaccount()
    {
        //我的账户
        return $this->render('myaccount');
    }
    public function actionMyprofile()
    {
        //我的资料
        return $this->render('myprofile');
    }
    public function actionIdentity()
    {
        //身份认证
        return $this->render('identity');
    }
    public function actionReceivable()
    {
        //收款账户
        return $this->render('receivable');
    }
    public function actionListbill()
    {
        //账单明细
        return $this->render('listbill');
    }
    public function actionNotify()
    {
        //消息通知
        return $this->render('notify');
    }
    public function actionEmployee()
    {
        //店员管理
        return $this->render('employee');
    }
    public function actionAddemployee()
    {
        //添加店员
        return $this->render('addemployee');
    }
}
