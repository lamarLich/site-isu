<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\AdminLoginForm;
use app\models\AddNewsForm;
use app\models\news;
use yii\web\Session;
use yii\web\UploadedFile;

class AdminController extends Controller
{
    public $layout = "admin-main";

    public function actionIndex()
    {
        $model = new AdminLoginForm();
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $session = Yii::$app->session;
            if(!$session->isActive)
            {
                $session->open();
                $session->set('admin', true);
            }
        }
        return $this->render('index',[
            'model' => $model,
        ]);
    }

    public function actionAdd_news()
    {
        if(Yii::$app->session->get('admin'))
        {
            $model = new AddNewsForm();
            $news = new news();

            if ($model->load(Yii::$app->request->post()))
            {
                //Загружаем картинку на сервер
                $model->file = UploadedFile::getInstance($model, 'file');
                $imageName = Yii::$app->getSecurity()->generateRandomString(10);
                $model->file->saveAs('images/news/' . $imageName . '.' . $model->file->extension);
                //Сохраняем в БД
                $news->img = 'images/news/' . $imageName . '.' . $model->file->extension;
                $news->title = $model->title;
                $news->text = $model->text;
                $news->save();
            }
            return $this->render('add_news', [
                'model' => $model,
            ]);
        }
        else
        {
            return $this->redirect(['admin/index']);
        }
    }

    public function actionChange_news()
    {
        if(Yii::$app->session->get('admin')) {
            $model = new AddNewsForm();

            $id = Yii::$app->request->get('id');
            if ($id != NULL) {
                if (news::find()->where(['id' => $id])->one()) {
                    $news = news::find()->where(['id' => $id])->one();

                    if ($model->load(Yii::$app->request->post())) {
                        //Загружаем картинку на сервер
                        if (UploadedFile::getInstance($model, 'file')) {
                            $model->file = UploadedFile::getInstance($model, 'file');
                            $imageName = Yii::$app->getSecurity()->generateRandomString(10);
                            $model->file->saveAs('images/news/' . $imageName . '.' . $model->file->extension);
                            $news->img = 'images/news/' . $imageName . '.' . $model->file->extension;
                        }
                        //Сохраняем в БД
                        $news->title = $model->title;
                        $news->text = $model->text;
                        $news->save();

                        return $this->redirect(['admin/change_news']);
                    }

                } else {
                    $news = 'Error';
                }
            } else {
                $news = news::find()->all();
            }

            return $this->render('change_news', [
                'news' => $news,
                'model' => $model,
            ]);
        } else {
            return $this->redirect(['admin/index']);
        }
    }

    public function actionDelete_news()
    {
        if(Yii::$app->session->get('admin'))
        {
            $news = news::find()->where(['id' => Yii::$app->request->get('id')])->one();
            $news->delete();

            return $this->redirect(['admin/change_news']);
        }else{
            return $this->redirect(['admin/index']);
        }
    }

    public function actionReg()
    {
        if(Yii::$app->session->get('admin')) {



            return $this->render('reg');
        }else{
            return $this->redirect(['admin/index']);
        }
    }


    public function actionLogout()
    {
        Yii::$app->session->remove('admin');
        Yii::$app->session->destroy();
        Yii::$app->session->close();

        return  $this->redirect(['admin/index']);
    }



}