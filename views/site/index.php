<?php
use yii\bootstrap\Carousel;
use yii\helpers\Html;
?>


                    <?= Carousel::widget([
                        'options' => [
                            'class' => 'slider',
                        ],
                        'items' => [
                            // the item contains only the image
                            [
                                'content' => '<img src="/realestate/images/slider/1.jpg"/>',
                                'caption' => '<h4>Singer name</h4><p>Singer description</p>',

                            ],
                            [
                                'content' => '<img src="/realestate/images/slider/2.jpg"/>',
                                'caption' => '<h4>Singer name</h4><p>Singer description</p>',

                            ],
                            [
                                'content' => '<img src="/realestate/images/slider/3.jpg"/>',
                                'caption' => '<h4>Singer name</h4><p>Singer description</p>',

                            ],
                            [
                                'content' => '<img src="/realestate/images/slider/4.jpg"/>',
                                'caption' => '<h4>Singer name</h4><p>Singer description</p>',

                            ],
                        ]
                    ]);
                    ?>

<hr>

<div class="banner-search">
    <div class="container">
        <!-- banner -->

        <div class="searchbar">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                   
                    <?= Html::beginForm(['watch/index'], 'get'); ?>
                    <h3>Search and Browse</h3>
                    <?= Html::input('search', 'q', Yii::$app->request->get('q'), ['class' => 'form-control']) ?>
                    <?= Html::hiddenInput('maxResults', '15')?>
                    <div class="row">
                        <div class="col-lg-offset-8 col-lg-4 col-sm-4">
                            <?= Html::submitButton('Hash String', ['class' => 'btn btn-info']) ?>
                        </div>
                    </div>
                    <?= Html::endForm() ?>

                </div>
                <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                    <h2><?=\app\components\citations\CitationsWidget::widget()?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner -->

<hr>
