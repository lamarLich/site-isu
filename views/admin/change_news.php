<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title="Изменить новость";
?>

<?php
    if(Yii::$app->request->get('id')) {
        if($news != 'Error') {
            ?>

            <?php
            $form = ActiveForm::begin([
                'options' => ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data'],

            ])
            ?>

            <div class="form-group">
                <label class="control-label col-sm-2">Название: </label>
                <div class="col-sm-10">
                    <?= $form->field($model, 'title')->textInput(['class' => 'form-control', 'value' => $news->title])->label(false); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Изображение: (оставьте пустьм, если не будете менять)</label>
                <div class="col-sm-10">
                    <?= $form->field($model, 'file')->fileInput(['class' => 'form-control'])->label(false); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Текст: </label>
                <div class="col-sm-10">
                    <?= $form->field($model, 'text')->textarea(['class' => 'form-control', 'value' => $news->text])->label(false); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="pull-right">
                    <?= Html::submitButton('Изменить новость', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>

            <?php
            ActiveForm::end();
        }
        else
        {
            echo 'Вы ввели неверный id';
        }
        ?>



        <?php
    }else {
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Название новости</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
       <?php foreach ($news as $new) {
            ?>
                <tr>
                    <th><?= $new->id ?></th>
                    <td style="width:70%"><?= $new->title ?></td>
                    <td><a href="<?= Url::to(['admin/change_news', 'id' => $new->id]) ?>">Изменить</a></td>
                    <td><a href="<?= Url::to(['admin/delete_news', 'id' => $new->id]) ?>">Удалить</a></td>
                </tr>

            <?php
        }
        ?>
            </tbody>
        </table>
       <?php
    }?>


