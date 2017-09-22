<?
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin index Examples</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css" />
  <link rel="stylesheet" href="assets/css/admin.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>

<body data-type="login">

  <div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                Amaze UI<span> Login</span> <i class="am-icon-skyatlas"></i>
            </div>
        </div>

        <div class="login-font">
            <i>Sign In </i> or  <a href="<?php echo yii\helpers\Url::to(['default/register'])?>"><span> Sign Up</span></a>
        </div>
        <div class="am-u-sm-10 login-am-center">
            <!-- <form class="am-form"> -->
              <?php
                $form = ActiveForm::begin([
                  'fieldConfig'=>[
                      'template'=>'<div class="am-form-group">{label}{input}</div>{error}',

                      ],
                      'options'=>[
                      'class'=>'am-form'

                      ],

                  ]);
                echo $form->field($model,'username')->textInput(['placeholder'=>'输入用户名'])->label('用户名');
                echo $form->field($model,'password')->passwordInput(['placeholder'=>'输入密码'])->label('密码');
                echo $form->field($model,'rememberMe')->checkbox(['template'=>'{input}<label>记住我</label>'])
              ?>
                <p>
                  <?php echo Html::submitButton('登录',['class'=>'am-btn am-btn-default'])?>
                </p>
            <?php ActiveForm::end();?>
        </div>
    </div>
</div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/amazeui.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>

</html>