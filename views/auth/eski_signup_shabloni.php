<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
    <section id="contact" class="white">
        <div class="clearbox100"></div>
        <div class="site-login" style="padding: 10px;">
            <h1 align="center">Ro'yxatdan o'tish</h1>

            <p align="center">Please fill out the following fields to login:</p>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-4\"></div>\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-4\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Ism', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'fam')->textInput(['autofocus' => true, 'placeholder' => 'Familiya', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'otec')->textInput(['autofocus' => true, 'placeholder' => 'Otasining ismi', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'birth_date')->textInput(['autofocus' => true, 'placeholder' => 'Tug`ilgan Sana', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'pol')->dropDownList(['autofocus' => true, 'value' => 'Erkak', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'pol')->dropDownList(['autofocus' => true, 'value' => 'Ayol', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'tel')->textInput(['autofocus' => true, 'placeholder' => 'Telefon raqam', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'Email', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'login')->textInput(['autofocus' => true, 'placeholder' => 'Login', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Parol', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <div class="form-group">
                <div class="col-lg-3"></div>
                <div class="col-lg-offset-2 col-lg-2">
                    <?= Html::submitButton('Ro`yxatdan o`tish', ['class' => 'btn btn-outlined btn-primary btn-lg', 'name' => 'signup-button']) ?>
                </div>
                <div class="col-lg-4"></div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </section>
</div>
