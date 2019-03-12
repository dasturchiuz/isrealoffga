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

            </div>
            <div class="clearbox10"></div>
            <h4 align="center" class="fade-up"><a href="/auth/send-email">Parolni unutdingizmi?</a></h4>
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
