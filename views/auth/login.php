<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

?>
<div id="content-wrapper">
    <section id="contact" class="white">
        <div class="clearbox50"></div>
        <div class="site-login" style="padding: 10px;">
        <div class="center gap fade-down section-heading">
            <h1 align="center">Kirish</h1>
            <hr>
            <p align="center">Materiallarimizdan foydalanish uchun o`z kabinetingizga kirishingiz kerak.</p>
        </div>

    <div class="fade-up">
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-4\"></div>\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-4\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'login')->textInput(['autofocus' => true, 'placeholder' => 'Login', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Parol', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

<!--        <div class="form-group">-->
<!--            <div class="input-group">-->
<!--                <div class="input-group-addon">+998</div>-->
<!--                <input type="text" id="exampleInputAmount" placeholder="Telefon raqam" style="width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;'">-->
<!--            </div>-->
<!--        </div>-->

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "\n<div class=\"col-lg-4\"></div>\n<div class=\"col-lg-offset-1 col-lg-4\">{input} {label}</div>\n<div class=\"col-lg-4\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-3"></div>
            <div class="col-lg-offset-2 col-lg-2">
                <?= Html::submitButton('Kirish', ['class' => 'btn btn-outlined btn-primary btn-lg', 'name' => 'login-button']) ?>
            </div>
            <div class="col-lg-4"></div>
        </div>

    <?php ActiveForm::end(); ?>
    </div>
        <div class="clearbox10"></div>
            <h4 align="center" class="fade-up"><a href="/auth/request-password-reset">Parolni unutdingizmi?</a></h4>
        <div class="clearbox20"></div>
            <div class="container">
                <div class="row fade-up">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-offset-1 col-lg-5">
                        <strong>Akkauntingiz yo`qmi?</strong>
                        <a href="<?= Url::toRoute(['/auth/signup']) ?>" class="btn btn-outlined btn-default">Ro'yxatdan o'ting <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>

</div>
    </section>
</div>
