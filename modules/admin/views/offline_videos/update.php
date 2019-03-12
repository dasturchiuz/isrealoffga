<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OfflineVideos */

$this->title = 'Update Offline Videos: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Offline Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="offline-videos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
