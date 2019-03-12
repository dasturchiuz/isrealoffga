<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
$this->title="Maxfiy so'zni tiklash";
?>
<div id="content-wrapper">
    <section id="contact" class="white">
        <div class="clearbox50"></div>
        <div class="site-login" style="padding: 10px;">
            <div class="center gap fade-down section-heading">
                <h1 align="center"><?=\Yii::t('app', 'Maxfiy so\'zni tiklash')?></h1>
                <hr>
                <p align="center"><?=Yii::t('app', "Parolni tiklash uchun havola qayd etilgan elektron pochta manziliga jo'natiladi")?></p>
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

                <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => \Yii::t('app', 'Elektron pochta'), 'style' => 'width: 100%; padding: 10px 5px; margin-bottom: 15px; background-color: rgba(0, 0, 0, 0.1); color: #202020; border: none; box-shadow: none; font-size: 16px;']) ?>
                <div class="form-group">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-offset-2 col-lg-2">
                        <?= Html::submitButton(\Yii::t('app', 'Tiklash'), ['class' => 'btn btn-outlined btn-primary btn-lg', 'name' => 'login-button']) ?>
                    </div>
                    <div class="col-lg-4"></div>
                </div>

                <?php ActiveForm::end(); ?>
            </div>

        </div>
    </section>
</div>
