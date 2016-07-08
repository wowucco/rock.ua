<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "singers".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property integer $user_id
 */
class Singers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'singers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 255],
            //[['user_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'image' => 'Image',
            'user_id' => 'User ID',
        ];
    }
}
