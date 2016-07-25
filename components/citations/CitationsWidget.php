<?php
/**
 * Created by PhpStorm.
 * User: wowucco
 * Date: 16.07.16
 * Time: 0:39
 */

namespace app\components\citations;

use app\components\citations\models\Citations;
use yii\base\Widget;

class CitationsWidget extends Widget
{

   /* public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub

    }*/

    public function getCitationId()
    {
        $i = 0;
        $allid = array();

        $All = Citations::find()->all();

        foreach ($All as $value){
            $allid[$i] = $value->id;
            $i++;
        }
        if($i<=1){
            $id = $allid[0];
        }else{
            $id = $allid[rand(0,$i)];
        }


        $query = Citations::findOne($id);
        if($query){
            return $query;
        }
        return 'Citation not found :(';
    }

    public function run()
    {
        $citation = $this->getCitationId();
        return $this->render('index',['citation' => $citation]);
        //print_r()
    }
}