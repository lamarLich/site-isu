<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=  Url::to(['admin/index'])?>">Панель Администратора</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?= Url::to(['admin/add_news']) ?>">Добавить новость</a></li>
                <li><a href="<?= Url::to(['admin/change_news']) ?>">Изменить новость</a></li>
            </ul>
            <?php
            if(Yii::$app->session->get('admin')) {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= Url::to(['admin/logout']) ?>">Выйти</a></li>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
</nav>
<div class="container">
    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
