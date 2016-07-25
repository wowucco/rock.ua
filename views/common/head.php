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
    <div class="header">
        <a href="/site/index" ><img src="/realestate/images/logo.PNG"  alt="Rock'n'Roll"></a>
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
                                ['label' => 'Charts', 'url' => '/charts/index'],
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






