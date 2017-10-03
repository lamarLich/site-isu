<?php

namespace app\models;

use Yii;
use yii\base\Model;


class AddNewsForm extends Model
{
    public $title;
    public $text;
    public $file;

    public function rules()
    {
        return [
            [['title','text'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Название',
            'text' => 'Текст',
            'file' => 'Изображение',
        ];
    }

}