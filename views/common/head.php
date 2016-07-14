<?php
/**
 * Created by PhpStorm.
 * User: wowucco
 * Date: 08.06.16
 * Time: 16:02
 */
?>

<?php

use yii\bootstrap\Nav;
?>

<!-- Header Starts -->
<div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
        <div class="container">

            <!-- Nav Starts -->
           
            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right">

                    <?=Nav::widget([
	                    	'options' => ['class' => 'navbar-nav navbar-right'],
	                    	'items' => [
                                ['label' => 'Home', 'url' => '/web/site/index'],
                                ['label' => 'Singers', 'url' => '/web/singers/index'],
                                ['label' => 'Charts', 'url' => '/web/charts/index'],
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
                                                    'url' => '/web/form/logout',
                                                    'linkOptions' => ['data-method' => 'post'],
                                                ],
                                        ],
	                    		])
	                    	],
                    	]);
                    ?>

                </ul>
            </div>

            <!-- #Nav Ends -->

        </div>
    </div>

    <div class="container">

        <!-- Header Starts -->

        <div class="header">
            <a href="/site/index" ><img src="/realestate/images/logo.PNG"  alt="Rock'n'Roll"></a>
        </div>

        <!-- #Header Starts -->

    </div>

</div>
<!-- #Header Starts -->






