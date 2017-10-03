<?php

use yii\helpers\Url;

$this->title = "Учебный процесс";
?>


<div class='content c-cafed'>
    <div class='wrapper'>
        <div class='content-title'>Учебный процесс</div>
        <div class='menu-boxed'>
            <a href='<?=  Url::to(['site/study_freshman'])?>'>
                <img src='../images/study/1.png' alt='' />
                <span>Первокурсникам</span>
            </a>
            <a href='http://umu.sibadi.org/Ved/Default.aspx' target='_blank'>
                <img src='../images/study/2.png' alt='' />
                <span>Ведомости</span>
            </a>
            <a href='http://umu.sibadi.org/Plans/Default.aspx' target='_blank'>
                <img src='../images/study/3.png' alt='' />
                <span>Учебные планы</span>
            </a>
            <a href='http://umu.sibadi.org/Rasp/Default.aspx' target='_blank'>
                <img src='../images/study/4.png' alt='' />
                <span>Расписание групп</span>
            </a>
            <a href='http://umu.sibadi.org/Graph/Default.aspx' target='_blank'>
                <img src='../images/study/5.png' alt='' />
                <span>График сессий</span>
            </a>
            <a href='<?=  Url::to(['site/study_teachers'])?>'>
                <img src='../images/study/6.png' alt='' />
                <span>Преподаватели</span>
            </a>
            <a href='<?=  Url::to(['site/study_resources'])?>'>
                <img src='../images/study/7.png' alt='' />
                <span>Интернет-ресурсы</span>
            </a>
            <a href='<?=  Url::to(['site/study_science'])?>'>
                <img src='../images/study/8.png' alt='' />
                <span>Наука</span>
            </a>
            <a href='<?=  Url::to(['site/study_active'])?>'>
                <img src='../images/study/9.png' alt='' />
                <span>Активность студентов</span>
            </a>
            <a href='<?=  Url::to(['site/study_projects'])?>'>
                <img src='../images/study/10.png' alt='' />
                <span>Проекты и достижения</span>
            </a>
            <a href='<?=  Url::to(['site/study_events'])?>'>
                <img src='../images/study/11.png' alt='' />
                <span>Мероприятия</span>
            </a>
            <a href='<?=  Url::to(['site/study_profession'])?>'>
                <img src='../images/study/12.png' alt='' />
                <span>Будущая профессия</span>
            </a>
        </div>
    </div>
</div>