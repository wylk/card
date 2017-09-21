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
}
