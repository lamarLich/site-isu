<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

    $this->title = 'Авторизация';
?>



<div class='content c-cafed'>
    <div class='wrapper'>
        <div class='content-title'>Авторизация</div>
            <?php
            $form = ActiveForm::begin()
            ?>
                <?= $form->field($model, 'login')->textInput(['placeholder' => 'Логин', 'class' => 'auth-login'])->label(false) ?>
                <?= $form->field($model, 'password')->passwordInput([ 'placeholder' => 'Пароль', 'class' => 'auth-pass'])->label(false) ?>
                <?= Html::submitButton('Войти &rarr;') ?>
            <?php
            ActiveForm::end();
            ?>
    </div>
</div>

