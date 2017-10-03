<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);


if($this->title == "Главная"){
    $cl = "header";
}else{
    $cl = "header header-min";
}

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script type='text/javascript' src='https://api-maps.yandex.ru/2.1/?load=package.standard&amp;lang=ru-RU'></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class='<?= $cl ?>'>
    <div class='wrapper'>
        <div class='topper'>
            <div class='logotype'></div>
            <ul class='menu'>
                <li><a href='<?= Url::home() ?>'>Главная</a></li>
                <li><a href='<?=  Url::to(['site/faculty'])?>'>Факультет</a></li>
                <li><a href='<?=  Url::to(['site/study'])?>'>Учебный процесс</a></li>
                <li><a href='<?=  Url::to(['site/abit'])?>'>Абитуриенту</a></li>
                <li><a href='<?=  Url::to(['site/dopobr'])?>'>Доп образование</a></li>
                <li><a href='<?=  Url::to(['site/contacts'])?>'>Контакты</a></li>
                <?php//<li class='search'><img src='../images/search.png' alt='' /></li> ?>
            </ul>
        </div>

        <div class='title'>
            <h2>ФГБОУ ВО "Сибирский государственный автомобильно дорожный университет (СибАДИ)"</h2>
            <h1>Информационные системы в управлении</h1>
            <a href='<?= Url::to(["site/login"]) ?>'>Личный кабинет</a>
         </div>
    </div>
</div>

<?= $content ?>

<div class='content c-footer'>
    <div class='wrapper'>
        <div class='footer'>
            <div class='contacts'>
                <span class='phone'>Любую справочную информацию Вы<br/>можете узнать по телефону</span>
                <b>(3812) 60-55-50</b>
                <span class='gr'>С 9:00 до 17:45 с понедельника по пятницу</span>
            </div>
            <div class='address'>
					<span>
						<b>Информационные системы в управлении</b>
						Сибирский государственный<br/>автомобильно-дорожный университет
					</span>
                <a href='http://сибади.рф' target='_blank'>www.сибади.рф</a>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
