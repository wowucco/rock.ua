<?php

use yii\widgets\Breadcrumbs;


/* @var $this yii\web\View */
/* @var $model app\models\Singers */
?>

<?php $this->title = $model->isNewRecord ? 'Create Singer' : 'Update '.$model->name ; ?>
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

<div class="singers-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
