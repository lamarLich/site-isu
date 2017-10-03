<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\teachers;
use app\models\news;
use app\models\users;
use app\models\LoginForm;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $news = news::find()->orderBy('id desc')->limit(3)->all();


        return $this->render('index',[
            'news' => $news,
        ]);
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $user = users::find()->where(['login' => $model->login])->one();
            $session = Yii::$app->session;
            $session->open();
            $session->set('id', $user->id);
        }

        if(Yii::$app->session->get('id'))
        {
            return $this->redirect(Url::to(['profile/index']));
        }else{
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionFaculty()
    {
        return $this->render('faculty');
    }

    public function actionStudy()
    {
        return $this->render('study');
    }

    public function actionStudy_freshman()
    {
        return $this->render('study_freshman');
    }

    public function actionStudy_teachers()
    {
        $teachers = teachers::find()->orderBy(['fio' => SORT_ASC])->all();

        return $this->render('study_teachers',[
            'teachers' => $teachers,
        ]);
    }

    public function actionStudy_active()
    {
        return $this->render('study_active');
    }

    public function actionStudy_events()
    {
        return $this->render('study_events');
    }

    public function actionStudy_profession()
    {
        return $this->render('study_profession');
    }

    public function actionStudy_projects()
    {
        return $this->render('study_projects');
    }

    public function actionStudy_resources()
    {
        return $this->render('study_resources');
    }

    public function actionStudy_science()
    {
        return $this->render('study_science');
    }

    public function actionDopobr()
    {
        return $this->render('dopobr');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionAbit()
    {
        return $this->render('abit');
    }

    public function actionStudy_teacher()
    {
        $id = Yii::$app->request->get('id');
        $teacher = (teachers::find()->where(['id'=> $id])->one()) ? teachers::find()->where(['id'=> $id])->one() : 'Error';

        return $this->render('study_teacher',[
            'teacher' => $teacher,
        ]);
    }

    public function actionNews()
    {
        $id = Yii::$app->request->get('id');
        $news = (news::find()->where(['id'=> $id])->one()) ? news::find()->where(['id'=> $id])->one() : 'Error';

        return $this->render('news',[
            'news' => $news,
        ]);
    }

    public function actionNews_all()
    {
        $news = news::find()->orderBy('id desc')->all();

        return $this->render('news_all',[
            'news' => $news,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->session->remove('id');
        Yii::$app->session->destroy();
        Yii::$app->session->close();

        return  $this->redirect(['site/login']);
    }
}
