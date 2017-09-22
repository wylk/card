<?php

namespace app\addons\card\wap\controllers;
use app\addons\card\common\CommonController;
use yii\web\Controller;
use app\vendor\org\FileUpload;
use Yii;

/**
 * Default controller for the `wap` module
 */
class DefaultController extends CommonController
{

    public function init()
    {
    	$this->layout=false;
    }

    public function beforeAction($action) 
    {
        $currentaction = $action->id;  
      
        $novalidactions = ['upload'];  
      
        if(in_array($currentaction,$novalidactions)) {  
            $action->controller->enableCsrfValidation = false;  
        }  
        parent::beforeAction($action);  
      
        return true;  
    }
    //我的
    public function actionIndex()
    {
        return $this->render('index');
    }
    //ajax图片上传
    public function actionUpload()
    {   
        if(Yii::$app->session['img']){
            unlink(Yii::$app->session['img']);
            $session = Yii::$app->session;
            $session->remove('img');
        }
        $up = new FileUpload();  
        //设置属性（上传的位置、大小、类型、设置文件名是否要随机生成）
        $path =  "./images/"; 
        $up->set("path",$path);  
        $up->set("maxsize",2000000); //kb  
        $up->set("allowtype",array("gif","png","jpg","jpeg"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小  
        $up->set("israndname",true);//true:由系统命名；false：保留原文件名

        //使用对象中的upload方法，上传文件，方法需要传一个上传表单的名字name：upload_file  
        //如果成功返回true，失败返回false  
        if($up->upload("upload_file")){  
            $session = Yii::$app->session;
            session_set_cookie_params(120);
            $session['img'] = $path.$up->getFileName();

            echo $path.$up->getFileName();die;    
        }else{    
            echo $up->getErrorMsg();  die;
        }
    }

    //发卡
    public function actionAdd_card()
    {
    	return $this->render('add_card');
    }

    //发券
    public function actionAdd_voucher()
    {
        return $this->render('add_voucher');
    }


}
