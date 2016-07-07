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
            <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>


            <!-- Nav Starts -->
           
            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right">


                    
                    <?=Nav::widget([
	                    	'options' => ['class' => 'navbar-nav navbar-right'],
	                    	'items' => [
                                ['label' => 'Home', 'url' => '/web/site/index'],
                                ['label' => 'Singers', 'url' => '/web/singers/index'],
                                ['label' => 'Charts', 'url' => '/web/site/charts'],
	                    		[
	                    			'label' => 'Login',
	                    			'url' => ['/form/login'],
	                    			'visible' => Yii::$app->user->isGuest
	                    		],
								[
                                    'visible' => !Yii::$app->user->isGuest,
			                    	'label' => Yii::$app->user->identity->username,
			                    		'items' => [
			                    				['label' => 'Edit Profile', 'url' => '#' ],
			                    				[
                                                    'label' => 'Logout',
                                                    'url' => '/web/form/logout',
                                                    'linkOptions' => ['data-method' => 'post'],
                                                ],

                                        ],
	                    		],
	                    	],
                    	]);
                    ?>

                </ul>
            </div>
            <!-- #Nav Ends -->

        </div>
    </div>

</div>
<!-- #Header Starts -->





<div class="container">

    <!-- Header Starts -->
    <div class="header">
        <a href="/site/index" ><img src="/realestate/images/logo.jpg"  alt="Rock'n'Roll"></a>

        <ul class="pull-right">
            <li><a href="buysalerent.html" >Listen</a></li>
            <li><a href="buysalerent.html" >Add</a></li>
            <li><a href="buysalerent.html" >Search</a></li>
        </ul>
    </div>
    <!-- #Header Starts -->
</div>
