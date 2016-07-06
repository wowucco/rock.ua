<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\SignupForm;
use yii\web\Response;
use yii\widgets\ActiveForm;
use app\models\LoginForm;
use app\models\ContactForm  ;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class FormController extends Controller
{
    public $layout = 'inner';
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionRegister()
    {
        $model = new SignupForm();

        if(\yii::$app->request->isAjax && \yii::$app->request->isPost){
	        if($model->load(\Yii::$app->request->post())) {
	            \yii::$app->response->format = Response::FORMAT_JSON;
	            return ActiveForm::validate($model);
	        }
        }

        if($model->load(\yii::$app->request->post()) && $model->signup()){
            //print_r($model->getAttributes());
            \Yii::$app->session->setFlash('success', 'Register Success');
        }

        return $this->render('register',['model' => $model]);
    }
    
    public function actionLogin(){
    	
    	if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        
        $model = new LoginForm;

        if($model->load(\Yii::$app->request->post()) && $model->login()){

            $this->goBack();
        }

        return $this->render("login", ['model' => $model]);
    }

    public function actionLogout(){
		
        \Yii::$app->user->logout();
        return $this->goHome();
    }
    
     public function actionContact(){

        $model = new ContactForm();
        /*if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $body = " <div>Body: <b> ".$model->body." </b></div>";
            $body .= " <div>Email: <b> ".$model->email." </b></div>";

            \Yii::$app->common->sendMail($model->subject,$body);

            print "Send success";
            die;
        }*/
        if($model->load(\yii::$app->request->post()) && $model->validate()){
			print 'GO!!';die;
		}

        return $this->render("contact", ['model' => $model]);
    }

}