<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Charts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="charts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Charts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
</div>
