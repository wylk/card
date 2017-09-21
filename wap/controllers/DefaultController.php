<?php

namespace app\addons\card\wap\controllers;
use app\addons\card\common\CommonController;
use yii\web\Controller;
use app\vendor\org\FileUpload;

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

    public function actionUpload()
    {
        $up = new FileUpload();  
        //设置属性（上传的位置、大小、类型、设置文件名是否要随机生成）  
        $up->set("path","./images/");  
        $up->set("maxsize",2000000); //kb  
        $up->set("allowtype",array("gif","png","jpg","jpeg"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小  
        $up->set("israndname",true);//true:由系统命名；false：保留原文件名  
          
        //使用对象中的upload方法，上传文件，方法需要传一个上传表单的名字name：pic  
        //如果成功返回true，失败返回false  
      
        if($up->upload("upload_file")){  
            /*echo '<pre>';  
            //获取上传成功后文件名字  
            var_dump($up->getFileName());  
            echo '</pre>';  */
            echo "<textarea><img src='./images/{$up->getFileName()}'style='width:100%'/><input type='hidden' name='img' value='./images/{$up->getFileName()}'></textarea>";die;
              
        }else{  
            echo '<pre>';  
            //获取上传失败后的错误提示  
            var_dump($up->getErrorMsg());  
            echo '<pre/>';  
        }
    }

    //发卡
    public function actionAdd_card()
    {
    	echo 1;
    	return $this->render('add_card');
    }


}
