<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Панель Администратора';
?>

<?php

    if(!Yii::$app->session->get('admin')) {
        $form = ActiveForm::begin([
            'options' => ['class' => 'form-horizontal', 'style' => 'margin:0 400px 0 400px'],
        ])
        ?>
        <h2>Вход</h2>
        <?= $form->field($model, 'login')->textInput(['class' => 'form-control', 'placeholder' => 'Логин'])->label(false) ?>
        <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'placeholder' => 'Пароль'])->label(false) ?>
        <?= Html::submitButton('Войти', ['class' => 'btn btn-lg btn-primary btn-block']) ?>
        <?php
        ActiveForm::end();
    }
    else
    { ?>
        Добро пожаловать в панель администратора!



<?php } ?>
