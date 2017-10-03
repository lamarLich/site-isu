<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


$this->title = "Добавить новость";

?>



<div class="wrapper">

    <?php
    $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data'],

    ])
    ?>

    <div class="form-group">
        <label class="control-label col-sm-2">Название: (не более 60 символов)</label>
        <div class="col-sm-10">
            <?= $form->field($model, 'title')->textInput(['class' => 'form-control'])->label(false); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Изображение: </label>
        <div class="col-sm-10">
            <?= $form->field($model, 'file')->fileInput(['class' => 'form-control'])->label(false); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Текст: </label>
        <div class="col-sm-10">
            <?= $form->field($model, 'text')->textarea(['class' => 'form-control'])->label(false); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="pull-right">
            <?= Html::submitButton('Добавить новость', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php
    ActiveForm::end();
    ?>


</div>
