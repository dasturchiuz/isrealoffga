<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OfflineVideosCategory */

$this->title = 'Update Offline Videos Category: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Offline Videos Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="offline-videos-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
