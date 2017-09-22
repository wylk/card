<?php
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

<body data-type="login" style="height:auto;">

  <div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                Amaze UI<span> Register</span> <i class="am-icon-skyatlas"></i>
            </div>
        </div>

        <div class="login-font">
           <i>Sign Up </i> or  <a href="<?php echo yii\helpers\Url::to(['default/login'])?>"><span> Sign In</span></a>
        </div>
        <div class="am-u-sm-10 login-am-center">
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
              echo $form->field($model,'password')->passwordInput(['placeholder'=>'设置个密码吧'])->label('密码');
              echo $form->field($model,'repass')->passwordInput(['placeholder'=>'输入确认密码'])->label('确认密码');
              echo $form->field($model,'email')->textInput(['placeholder'=>'输入电子邮件'])->label('电子邮件');
              echo $form->field($model,'phone')->textInput(['placeholder'=>'输入手机号码'])->label('手机');

            ?>
                    <p>
                      <?php echo Html::submitButton('注册',['class'=>'am-btn am-btn-default'])?></p>
                <?php ActiveForm::end();?>
            <!-- </form> -->
        </div>
    </div>
</div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/amazeui.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>

</html>