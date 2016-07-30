<?php
/**
 * Created by PhpStorm.
 * User: wowucco
 * Date: 29.07.16
 * Time: 23:45
 */
?>

<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

?>

<?php $this->title = 'Watch Video'; ?>
<span class="pull-right">
        <?= Breadcrumbs::widget([

            'links' => [
                $this->title,
            ],
        ]);
        ?>
    </span>

<div class="container">
    <div class="row">

        <div class="col-lg-3 col-sm-3">

            <?= Html::beginForm(['watch/index'], 'get'); ?>

                Search Videos: <?= Html::input('search', 'q', Yii::$app->request->get('q'), ['class' => 'form-control', 'placeholder' => 'Enter Keywords']) ?>
                Max Results: <?= Html::input('number', 'maxResults', '15', ['min' => 1, 'max' => 15])?>
                <div class="row">
                    <div class="col-lg-offset-6 col-lg-4 col-sm-4">
                        <?= Html::submitButton('GO!', ['class' => 'btn btn-info']) ?>
                    </div>
                </div>

            <?= Html::endForm() ?>

        </div>

        <div class="col-lg-9 col-sm-9">
            <?php if($searchResponse != false) { ?>

                <?php
                    $videos = '';
                    $watchVideos = '';
                    $channels = '';
                    $watchChannels = '';
                    $playlists = '';
                    $watchPlaylists = '';
                ?>

                <!--Add each result to the appropriate list, and then display the lists of
                matching videos, channels, and playlists.-->
                <?php foreach ($searchResponse['items'] as $searchResult) { ?>

                    <?php
                        switch ($searchResult['id']['kind']) {
                            case 'youtube#video':
                                $videos .= '<li style="margin-bottom: 7px">'.$searchResult['snippet']['title'].'</li>';
                                $watchVideos .= Html::beginForm(['/watch/index?videoId='.$searchResult['id']['videoId']])
                                                .Html::submitButton('Watch Video',['class' => 'play'])
                                                .Html::endForm();
                            break;
                            case 'youtube#channel':
                                $channels .= '<li style="margin-bottom: 7px">'.$searchResult['snippet']['title'].'</li>';
                                $watchChannels .= Html::beginForm(['/watch/index?channelId='.$searchResult['id']['channelId']])
                                                .Html::submitButton('Watch Video',['class' => 'play'])
                                                .Html::endForm();
                            break;
                            case 'youtube#playlist':
                                $playlists .= '<li style="margin-bottom: 7px">'.$searchResult['snippet']['title'].'</li>';
                                $watchPlaylists .= Html::beginForm(['/watch/index?playlistId='.$searchResult['id']['playlistId']])
                                                .Html::submitButton('Watch Video',['class' => 'play'])
                                                .Html::endForm();
                            break;
                        }
                    ?>

                <?php } ?>

                <h3>Videos</h3>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6"><?=$videos?></div>
                        <div class="col-lg-6 col-sm-6"><?=$watchVideos?></div>
                    </div>
                </div>

                <h3>Channels</h3>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6"><?=$channels?></div>
                        <div class="col-lg-6 col-sm-6"><?=$watchChannels?></div>
                    </div>
                </div>

                <h3>Playlists</h3>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6"><?=$playlists?></div>
                        <div class="col-lg-6 col-sm-6"><?=$watchPlaylists?></div>
                    </div>
                </div>

            <?php } ?>

            <?php if(\yii::$app->request->get('videoId')) { ?>
                    <iframe width="640" height="390"
                        src="https://www.youtube.com/embed/<?=\yii::$app->request->get('videoId')?>"
                        frameborder="0" allowfullscreen>
                    </iframe>
            <?php } ?>

            <?php if(\yii::$app->request->get('channelId')) { ?>
                <h3>I'm sorry, the channel is temporarily closed due to the player settings. Please, select something of the above.</h3>
                <!--<iframe width="640" height="390"
                        src="https://www.youtube.com/channel/<?/*=\yii::$app->request->get('channelId')*/?>"
                        frameborder="0" allowfullscreen>
                </iframe>-->
            <?php } ?>

            <?php if(\yii::$app->request->get('playlistId')) { ?>
                <h3>I'm sorry, the playlist is temporarily closed due to the player settings. Please, select something of the above.</h3>
                <!--<iframe width="420" height="315"
                        src="https://www.youtube.com/embed/<?/*=\yii::$app->request->get('playlistId')*/?>"
                        frameborder="0" allowfullscreen>
                </iframe>-->
            <?php } ?>

        </div>

    </div>
</div>
