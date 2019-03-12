<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OfflineVideos */

$this->title = 'Create Offline Videos';
$this->params['breadcrumbs'][] = ['label' => 'Offline Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offline-videos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
