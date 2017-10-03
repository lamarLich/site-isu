<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;

$this->title = 'Все новости';

?>

<div class='wrapper'>
    <h3>Все новости</h3>
    <div class='news-latest'>
        <?php
        foreach ($news as $new) {
            ?>
            <a href = "<?= Url::to(['site/news', 'id'=>$new->id])?>">
                <div class='news news-all'>
                        <img src='/<?= $new->img ?>' alt=''/>
                    <div class='title'><?= StringHelper::truncate($new->title,60) ?></div>
                    <div class='line'></div>
                    <div class='text'>
                        <?= StringHelper::truncate($new->text,150) ?>
                    </div>
                </div>
            </a>
            <?php
        }
        ?>
    </div>
</div>
