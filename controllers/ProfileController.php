<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;

class ProfileController extends Controller
{
    public $layout = "profile-main";


    public function actionIndex()
    {
        if (Yii::$app->session->get('id'))
            return $this->render('index');
        else
            return $this->redirect(Url::to(['site/login']));
    }

    public function actionRasp()
    {
        if(Yii::$app->session->get('id'))
            return $this->render('rasp');
        else
            return $this->redirect(Url::to(['site/login']));
    }
}