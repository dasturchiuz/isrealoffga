<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResetPasswordForm */
/* @var $form ActiveForm */
?>

<div id="content-wrapper">
    <section id="contact" class="white">
        <div class="clearbox50"></div>
        <div class="auth-resetPassword">
            <h2 align="center">Emailni kiriting</h2>
            <div class="clearbox50"></div>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\"></div>\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-4\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true, 'placeholder' => 'Parol', 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>

            <div class="form-group">
                <div class="col-lg-3"></div>
                <div class="col-lg-offset-5 col-lg-2">
                    <div class="clearbox20"></div>
                    <?= Html::submitButton('Tiklash', ['class' => 'btn btn-outlined btn-primary']) ?>
                </div>
                <div class="col-lg-4"></div>
            </div>
            <?php ActiveForm::end(); ?>

            <div class="clearbox50"></div>
            <div class="clearbox20"></div>

        </div><!-- auth-resetPassword -->
    </section>
</div>
