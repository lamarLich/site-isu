<?php

namespace app\models;

use Yii;
use yii\base\Model;


class AdminRegForm extends Model
{
    public $login;
    public $firstName;
    public $lastName;
    public $secondName;
    public $department;
    public $class;
    public $course;
    public $gender;

    public function rules()
    {
        return[
            [['login','firstName','lastName']],
        ];
    }


}