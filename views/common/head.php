<?php
/**
 * Created by PhpStorm.
 * User: wowucco
 * Date: 08.06.16
 * Time: 16:02
 */
?>

<!-- Header Starts -->

<hr>
<div class="container">
    <div class="row">

        <div class="col-lg-6 col-sm-6">
            <div class="header">
                <a href="/site/index" ><img src="/realestate/images/logo.PNG"  alt="Rock'n'Roll"></a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-3">

            <a href="#"><img src="/realestate/images/facebook.png"  alt="facebook"></a>
            <a href="#"><img src="/realestate/images/twitter.png"  alt="twitter"></a>
            <a href="#"><img src="/realestate/images/linkedin.png"  alt="linkedin"></a>
            <a href="#"><img src="/realestate/images/instagram.png"  alt="instagram"></a>
        </div>

        <div class="col-lg-3 col-sm-3">

            <p><b>wOwUccO & Bootstrap Realestate Inc.</b><br>
                <span class="glyphicon glyphicon-map-marker"></span> Ukraine, Kiev<br>
                <span class="glyphicon glyphicon-envelope"></span> ckpet85@gmail.com<br>
        </div>

    </div>
</div>

<hr>
<!-- Nav Starts -->

<div class="navbar-wrapper">
    <div class="navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right">

                    <?= \yii\bootstrap\Nav::widget([
	                    	'options' => ['class' => 'navbar-nav navbar-right'],
	                    	'items' => [
                                ['label' => 'Home', 'url' => '/site/index'],
                                ['label' => 'Singers', 'url' => '/singers/index'],
                                ['label' => 'Watch the Video', 'url' => '/watch/index'],
                                ['label' => 'Charts', 'url' => '/charts/index'],
                                ['label' => 'Send Messeng', 'url' => '/form/contact'],
                                Yii::$app->user->isGuest ? (
                                [
	                    			'label' => 'Login',
	                    			'url' => ['/form/login'],
	                    		]) : (
								[
			                    	'label' => Yii::$app->user->identity->username,
			                    		'items' => [
			                    				['label' => 'Edit Profile', 'url' => '#' ],
			                    				[
                                                    'label' => 'Logout',
                                                    'url' => '/form/logout',
                                                    'linkOptions' => ['data-method' => 'post'],
                                                ],
                                        ],
	                    		])
	                    	],
                    	]);
                    ?>

                </ul>
            </div>
        </div>
    </div>
</div>
<hr>

<!-- #Nav Ends -->

<!-- #Header Starts -->






