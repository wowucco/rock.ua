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

    public function actionTests()
    {
    	//$this->layout = 'bootstrap';
        return $this->render('test');
    }

    public function actionAbout()
    {
        $DEVELOPER_KEY = 'AIzaSyB21Qd8g8rSQYBHIQK6S0ANa8faCDwwZNE';

        $htmlBody = '
<form method="GET">
  <div>
    Search Term: <input type="search" id="q" name="q" placeholder="Enter Search Term">
  </div>
  <div>
    Max Results: <input type="number" id="maxResults" name="maxResults" min="1" max="50" step="1" value="25">
  </div>
  <input type="submit" value="Search">
</form>
';

// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.
        if ($_GET) {
            //var_dump($_GET);die;
            // Call set_include_path() as needed to point to your client library.

            /*
             * Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
             * Google Developers Console <https://console.developers.google.com/>
             * Please ensure that you have enabled the YouTube Data API for your project.
             */
            $DEVELOPER_KEY = 'AIzaSyB21Qd8g8rSQYBHIQK6S0ANa8faCDwwZNE';

            $client = new Google_Client();
            $client->setDeveloperKey($DEVELOPER_KEY);

            // Define an object that will be used to make all API requests.
            $youtube = new Google_Service_YouTube($client);

            try {
                // Call the search.list method to retrieve results matching the specified
                // query term.
                $searchResponse = $youtube->search->listSearch('id,snippet', array(
                    'q' => $_GET['q'],
                    'maxResults' => $_GET['maxResults'],
                ));

                $videos = '';
                $channels = '';
                $playlists = '';

                // Add each result to the appropriate list, and then display the lists of
                // matching videos, channels, and playlists.
                foreach ($searchResponse['items'] as $searchResult) {
                    switch ($searchResult['id']['kind']) {
                        case 'youtube#video':
                            $videos .= sprintf('<li>%s (%s)</li>',
                                $searchResult['snippet']['title'], $searchResult['id']['videoId']);
                            break;
                        case 'youtube#channel':
                            $channels .= sprintf('<li>%s (%s)</li>',
                                $searchResult['snippet']['title'], $searchResult['id']['channelId']);
                            break;
                        case 'youtube#playlist':
                            $playlists .= sprintf('<li>%s (%s)</li>',
                                $searchResult['snippet']['title'], $searchResult['id']['playlistId']);
                            break;
                    }
                }

                $htmlBody = "
    <h3>Videos</h3>
    <ul>$videos</ul>
    <h3>Channels</h3>
    <ul>$channels</ul>
    <h3>Playlists</h3>
    <ul>$playlists</ul>
";
            } catch (Google_Service_Exception $e) {
                $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
                    htmlspecialchars($e->getMessage()));
            } catch (Google_Exception $e) {
                $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
                    htmlspecialchars($e->getMessage()));
            }
        }
        return $this->render('about',['htmlBody' => $htmlBody]);
    }
}
