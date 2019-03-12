<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Maqolalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Media fayl qo`shish', ['add-media', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Kategoriyaga qo`shish', ['add-category', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Teglarga qo`shish', ['add-tags', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('O`chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Haqiqatdan ham ushbu maqolani o`chirishni hoxlaysizmi?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'short_text',
            'description',
            'date',
            'media',
            'viewed',
            'user_id',
            'status',
            'category_id',
        ],
    ]) ?>

</div>
