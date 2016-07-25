<?php
use yii\bootstrap\Carousel;
?>


                    <?= Carousel::widget([
                        'options' => [
                            'class' => 'slider',
                        ],
                        'items' => [
                            // the item contains only the image
                            [
                                'content' => '<img src="/realestate/images/slider/1.jpg"/>',
                                'caption' => '<h4>This is title</h4><p>This is the caption text</p>',

                            ],
                            [
                                'content' => '<img src="/realestate/images/slider/2.jpg"/>',
                                'caption' => '<h4>This is title</h4><p>This is the caption text</p>',

                            ],
                            [
                                'content' => '<img src="/realestate/images/slider/3.jpg"/>',
                                'caption' => '<h4>This is title</h4><p>This is the caption text</p>',

                            ],
                            [
                                'content' => '<img src="/realestate/images/slider/4.jpg"/>',
                                'caption' => '<h4>This is title</h4><p>This is the caption text</p>',

                            ],
                        ]
                    ]);
                    ?>

<hr>

<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3>Buy, Sale & Rent</h3>
        <div class="searchbar">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <input type="text" class="form-control" placeholder="Search of Properties">
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 ">
                            <select class="form-control">
                                <option>Buy</option>
                                <option>Rent</option>
                                <option>Sale</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <select class="form-control">
                                <option>Price</option>
                                <option>$150,000 - $200,000</option>
                                <option>$200,000 - $250,000</option>
                                <option>$250,000 - $300,000</option>
                                <option>$300,000 - above</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <select class="form-control">
                                <option>Property</option>
                                <option>Apartment</option>
                                <option>Building</option>
                                <option>Office Space</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <button class="btn btn-success"  onclick="window.location.href='buysalerent.html'">Find Now</button>
                        </div>
                    </div>


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
