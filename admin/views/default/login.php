<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = '五一乐卡后台管理系统';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">Y+</h1>

        </div>
        <h3>欢迎使用 Yii2+</h3>


    <div class="row">
        <div class="">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('用户名') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('密码') ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('记住我') ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    </div>
    <div class="footer">
        <div class="">Copyright &copy; 2012-2016 <a href="http://www.quxdui.com/" target="_blank">Quxdui.com</a>
        </div>
    </div>
</div>


