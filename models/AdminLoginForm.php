<?php

namespace app\models;

use Yii;
use yii\base\Model;


class AdminLoginForm extends Model
{
    public $login;
    public $password;


    public function rules()
    {
        return [
            [['login', 'password'], 'required', 'message' => 'Поле не может быть пустым'],
            ['login', 'validateLogin'],
            ['password','validatePassword'],
        ];
    }


    public function validateLogin()
    {
        if($this->login != 'admin'){
            $this->addError('password','Неверный логин или пароль');
        }
    }

    public function validatePassword()
    {
        if($this->password != 'admin'){
            $this->addError('password','Неверный логин или пароль');
        }
    }

}
