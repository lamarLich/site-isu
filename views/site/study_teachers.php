<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\StringHelper;

$this->title = 'Преподаватели';
?>

<div class='content c-cafed'>
    <div class='wrapper'>

        <div class='content-title'><a href="<?= Url::to(['site/study'])?>">Учебный процесс </a> / <?=$this->title?></div>

        <?php
            foreach($teachers as $t) {
            ?>

                    <div class="teach_table">
                        <a href="<?= Url::to(['site/study_teacher','id'=> $t['id'] ])?>">
                            <div class="teach_table_a">
                                <img src="<?= Html::encode($t['img']) ?>">
                                <div class="teach_table_info">
                                    <h4><?= Html::encode($t['fio'])?></h4>
                                    <p>
                                        <b>Преподаваемые дисциплины: </b>
                                        <?= Html::encode(StringHelper::truncate($t['subjects'],300)) ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
            }
        ?>

    </div>
</div>