<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\users;


class LoginForm extends Model
{
    public $login;
    public $password;
    public $rememberMe = true;

    public function rules()
    {
        return[
            [['login','password'], 'required'],
            ['password','validatePassword'],
        ];
    }

    public function validatePassword()
    {
        if(!users::find()->where(['login' => $this->login, 'password' => $this->password])->one())
            $this->addError('password','Неверный логин или пароль');
    }

    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'password' => 'Пароль',
        ];
    }


}
