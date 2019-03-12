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
                <h1 align="center">Ro'yxatdan o'tish</h1>
                <hr>
                <p align="center"><br>Kurslarimizga yozilish uchun ro`yxatdan o`tishingiz kerak.</p>
            </div>

            <div class="clearbox20"></div>

            <div class="fade-up">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-4\"></div>\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-4\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Ism', 'style' => 'width: 100%; padding: 10px 5px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'fam')->textInput(['placeholder' => 'Familiya', 'style' => 'width: 100%; padding: 10px 5px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'otec')->textInput(['placeholder' => 'Otasining ismi', 'style' => 'width: 100%; padding: 10px 5px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'birth_date')->input('date', ['placeholder' => 'Tug`ilgan sana', 'style' => 'width: 100%; padding: 10px 5px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-offset-1 col-lg-5">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-light-blue form-check-label" style="width: 70px; height: 40px; border-radius: 100px; border: 1px solid #C4C9CA; background-color: rgba(0, 0, 0, 0.1); font-size: 12px;">Erkak
                                <?= $form->field($model, 'pol')->input('radio', ['value' => 'Erkak', 'class' => 'form-check-input', 'autocomplete' => 'off']) ?>
                            </label>

                            <label class="btn btn-light-blue form-check-label" style="width: 70px; height: 40px; border-radius: 100px; border: 1px solid #C4C9CA; background-color: rgba(0, 0, 0, 0.1); font-size: 12px; margin-left: 20px;">Ayol
                                <?= $form->field($model, 'pol')->input('radio', ['value' => 'Ayol', 'class' => 'form-check-input', 'autocomplete' => 'off']) ?>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>

<!--                        <label>-->
<!--                            --><?//= $form->field($model, 'pol')->input('radio', ['value' => 'Erkak', 'class' => 'option-input radio']) ?>
<!--                        Erkak</label>-->
<!---->
<!--                        <label>-->
<!--                            --><?//= $form->field($model, 'pol')->input('radio', [ 'value' => 'Ayol', 'class' => 'option-input radio']) ?>
<!--                        Ayol</label>-->


            <?= $form->field($model, 'tel')->input('tel', ['placeholder' => 'Telefon raqam', 'value' => '+998', 'style' => 'width: 100%; padding: 10px 5px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email', 'style' => 'width: 100%; padding: 10px 5px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'login')->textInput(['placeholder' => 'Login', 'style' => 'width: 100%; padding: 10px 5px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Parol', 'style' => 'width: 100%; padding: 10px 5px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <!--        <div class="form-group">-->
            <!--            <div class="input-group">-->
            <!--                <div class="input-group-addon">+998</div>-->
            <!--                <input type="text" id="exampleInputAmount" placeholder="Telefon raqam" style="width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;'">-->
            <!--            </div>-->
            <!--        </div>-->

            <div class="form-group">
                <div class="col-lg-3"></div>
                <div class="col-lg-offset-2 col-lg-2">
                    <?= Html::submitButton('Ro`yxatdan o`tish', ['class' => 'btn btn-outlined btn-primary btn-lg', 'name' => 'signup-button']) ?>
                </div>
                <div class="col-lg-4"></div>
            </div>

            <?php ActiveForm::end(); ?>
            </div>

            <div class="clearbox20"></div>
            <div class="container">
                <div class="row fade-up" style="margin-left: 30px;">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-offset-1 col-lg-4">
                        <strong>Akkauntingiz bormi?</strong>
                        <a href="<?= Url::toRoute(['/auth/login']) ?>" class="btn btn-outlined btn-default">Kiring <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <div class="col-lg-5"></div>
                </div>
            </div>

        </div>
    </section>
</div>
