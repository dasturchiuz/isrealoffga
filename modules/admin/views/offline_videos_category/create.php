<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OfflineVideosCategory */

$this->title = 'Create Offline Videos Category';
$this->params['breadcrumbs'][] = ['label' => 'Offline Videos Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offline-videos-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
