<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\ContactForm;
use Google_Service_YouTube;
use Google_Client;

class SiteController extends Controller
{
	public $layout = 'inner';
	
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'test' => [
            	'class' => 'app\actions\TestAction',
            ],
        ];
    }

    public function actionLogin()
    {
        return $this->redirect(['form/login']);
    }

    public function actionIndex()
    {
    	$this->layout = 'bootstrap';
        return $this->render('index');
    }
}
