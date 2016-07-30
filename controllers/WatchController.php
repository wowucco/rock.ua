<?php
/**
 * Created by PhpStorm.
 * User: wowucco
 * Date: 29.07.16
 * Time: 22:44
 */

namespace app\controllers;

use yii\web\Controller;
use Google_Client;
use Google_Service_YouTube;

Class WatchController extends Controller
{
    
    public $layout = 'inner';
    public $searchResponse = false;
    private $DEVELOPER_KEY = 'AIzaSyB21Qd8g8rSQYBHIQK6S0ANa8faCDwwZNE';

    public function actionIndex()
    {
        //var_dump($_GET['q']);die;

        if(\yii::$app->request->get('q'))
        {
            $client = New Google_Client();
            $client->setDeveloperKey($this->DEVELOPER_KEY);

            $youtube = New Google_Service_YouTube($client);

            if($youtube)
            {
                $this->searchResponse = $youtube
                    ->search
                    ->listSearch('id,snippet', [
                            'q' => \yii::$app->request->get('q'),
                            'maxResults' => \yii::$app->request->get('maxResults'),
                        ]);
                
            }
        }
        
        return $this->render('index',['searchResponse' => $this->searchResponse]);
    }
    
}