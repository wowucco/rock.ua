<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;


/* @var $this yii\web\View */
/* @var $model app\models\Singers */
?>

<?php $this->title = $model->name; ?>
    <span class="pull-right">
        <?= Breadcrumbs::widget([

                'links' => [
                    [
                        'label' => 'Singers',
                        'url' => ['singers/index'],

                    ],
                    $this->title,
                ],
            ]);
        ?>
    </span>
<div class="singers-view">

    <h1><?php Html::encode($this->title) ?></h1>

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
    <?php if(isset($_GET['status'])) : ?>
        <?= \yii\bootstrap\Alert::widget([
                'options' => [
                'class' => 'alert-info'
                ],
                'body' => 'You create new singer '.$model->name,
            ]);
        ?>
    <?php endif; ?>

   
                <img src="<?=$model->image?>" alt="...">

                    <h3><?=$model->name?></h3>
                    <p><?=$model->description?></p>



</div>
