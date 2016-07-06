<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Singers */

$this->title = 'Create Singers';
$this->params['breadcrumbs'][] = ['label' => 'Singers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="singers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
