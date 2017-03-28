<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 28.03.2017
 * Time: 22:43
 */

namespace app\models;

use Yii;
use yii\base\Model;

class RegistrationForm extends Model
{
    public $login;
    public $email;
    public $firstName;
    public $lastName;
    public $secondName;
    public $faculty;
    public $class;
    public $password;
    public $password_repeat;


    public function rules()
    {
        return[
            [['firstName','lastName','password','password_repeat','login','email'],'required','message'=>'Поля должны быть заполнены'],
            ['password','compare','message'=>'Пароли не совпадают'],
            ['email', 'email'],
            ['login','validateLogin'],
            ['email','validateEmail'],
        ];
    }

    //@TODO:[Dmitry] Добавить БД Users, и сделать функции валидации

    public function validateLogin($attribute, $params)
    {

    }
    public function validateEmail($attribute, $params)
    {

    }

}