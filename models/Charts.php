<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "charts".
 *
 * @property integer $id
 * @property string $name
 * @property string $text_preview
 * @property string $description
 * @property string $image
 */
class Charts extends \yii\db\ActiveRecord
{
    public $img;
    public $string;
    public $filename;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'charts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text_preview', 'description', 'image'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['text_preview'], 'string', 'max' => 255],
            [['image'], 'file']
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
            'text_preview' => 'Text Preview',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }

    public function beforeSave($insert)
    {
        if($this->isNewRecord){
            $this->string = substr(uniqid('img'), 0, 12);
            $this->img = UploadedFile::getInstance($this, 'image');
            $this->filename = 'img/charts/'.$this->string.'.'.$this->img->extension;
            $this->img->saveAs($this->filename);
            $this->image= '/'.$this->filename;
        }else{
            $this->img =UploadedFile::getInstance($this, 'image');
            if($this->img){
                $this->img->saveAs(substr($this->img, 1));
            }
        }

        return parent::beforeSave($insert);
    }
}
