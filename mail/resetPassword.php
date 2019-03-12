<?php
/**
 * Created by PhpStorm.
 * User: iProger
 * Date: 01.03.2019
 * Time: 21:07
 *
 * @var $user \app\models\User
 */

use yii\helpers\Html;

echo 'Salom'.Html::encode($user->name).'.';

echo Html::a('Parolni o`zgartirish uchun ushbu ssilkaga bosing.',
    Yii::$app->urlManager->createAbsoluteUrl(
        [
            '/auth/reset-password',
            'key' => $user->secret_key
        ]
    )
);