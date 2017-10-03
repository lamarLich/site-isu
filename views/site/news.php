<?php
use yii\helpers\Url;
use yii\helpers\Html;



    if($news != 'Error') {
        $this->title =  $news->title;
        ?>

        <div class="content c-cafed">
            <div class="wrapper">
                <div class="news-head"><a href="<?= Url::to(['site/news_all']) ?>"> &#8592 Ко всем новостям</a></div>
            </div>
        </div>
        <div class='news-title' style="	background-image:  url('../<?= Html::encode($news->img)?>');">
            <div class="wrapper">
                <h1><?= Html::encode($news->title) ?></h1>
            </div>
        </div>
        <div class="content c-cafed">
            <div class="wrapper">
                <div class="news-text">
                    <?= nl2br(Html::encode($news->text)) ?>
                </div>
            </div>
        </div>

        <?php
    }
    else
    {
        $this->title = "Ошибка";
        ?>

        <div class='content c-cafed'>
            <div class='wrapper'>
                <h2 style="text-align:center">Такой новости не существует!<br> Возможно вы ввели неверный id.</h2>

            </div>
        </div>
<?php
    }
?>

