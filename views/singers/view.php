<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Singers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Singers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="singers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php if($model->isNewRecord) : ?>
        <?= \yii\bootstrap\Alert::widget([
                'options' => [
                'class' => 'alert-info'
                ],
                'body' => 'You create new singer '.$model->name,
            ]);
        ?>
    <?php endif; ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:ntext',
            'image',
            'user_id',
        ],
    ]) ?>

</div>
