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
$url=Yii::$app->urlManager->createAbsoluteUrl(
    [
        '/auth/reset-password',
        'token'=>$token
    ]
);
?>

<h2>Здраствуйте <?=$username?>,</h2>

<p>Перейдите по ссылке ниже, чтобы сбросить пароль:</p>

<?= Html::a($url,$url);?>