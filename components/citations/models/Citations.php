<?php
/**
 * Created by PhpStorm.
 * User: wowucco
 * Date: 16.07.16
 * Time: 1:02
 */

namespace app\components\citations\models;

use yii\db\ActiveRecord;

class Citations extends ActiveRecord
{
    public static function tableName()
    {
        return 'citations';
    }
}