<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SingersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

<?php $this->title = 'Singers' ?>
<span class="pull-right">
        <?= Breadcrumbs::widget([

            'links' => [
                $this->title,
            ],
        ]);
        ?>
    </span>

<div class="singers-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create new Singer', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
    
    <div class="row">
        <?php foreach ($allsingers as $singer) { ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?=$singer->image ?>" alt="">
                <div class="caption">
                    <h3><?=$singer->name?></h3>
                    <p><?=$singer->text_preview.'...'?></p>
                    <p><a href="/singers/view?id=<?=$singer->id?>" class="btn btn-primary" role="button">Details</a></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
