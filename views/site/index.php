<?php

/* @var $this yii\web\View */
use yii\helpers\StringHelper;
use yii\helpers\Url;

$this->title = 'Главная';
?>



<div class='content c-about'>
    <div class='wrapper'>
        <div class='about'>
            <div class='data'>
					<span class='text'>
						<div class='img'>
							<img src='images/photo.png' alt='' />
						</div>
						<span class='name'>
							<b>Остринская Любовь Ивановна</b> / к.э.н, доцент, декан факультета ИСУ
						</span>
						Justo vivamus in facilisis gravida iaculis neque nullam cum vulputate nullam scelerisque tempus tristique quisque a enim nam leo a maecenas mauris scelerisque eros. Dui ut in suspendisse per tempor netus in at curae id dictum scelerisque condimentum turpis consectetur in consectetur justo ipsum duis potenti gravida arcu integer massa.<br/><br/>
						Augue parturient lectus mattis pharetra egestas sem ullamcorper et a a egestas consectetur imperdiet primis parturient ultricies pharetra dapibus condimentum. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.
					</span>
            </div>
        </div>
    </div>
</div>

<div class='content c-cafed'>
    <div class='wrapper'>
        <div class='cafed-list'>
            <a href='http://www.sibadi.org/about/department/73/' class='cafed cafed-security'>
                <!--<h4>ИБ</h4>-->
                <span>Информационная безопасность</span>
            </a>
            <a href='http://www.sibadi.org/about/department/75/' class='cafed cafed-system'>
                <!--<h4>КИАС</h4>-->
                <span>Компьютерные информационные и автоматизированные системы</span>
            </a>
            <a href='http://www.sibadi.org/about/department/89/' class='cafed cafed-inform'>
                <!--<h4>ПИЭ</h4>-->
                <span>Прикладная информатика в<br/>экономике</span>
            </a>
        </div>
    </div>
</div>

<div class='content c-news'>
    <div class='wrapper'>
        <h3>Последние новости <a href='<?= Url::to(['site/news_all'])?>'>Читать все &rarr;</a></h3>
        <div class='news-latest'>
            <?php
            foreach ($news as $new) {
                ?>
                <div class='news'>
                    <a href='<?= Url::to(['site/news', 'id'=>$new->id])?>'>
                        <img src='<?= $new->img ?>' alt=''/>
                    </a>
                    <div class='title'><?= StringHelper::truncate($new->title,70) ?></div>
                    <div class='line'></div>
                    <div class='text'>
                       <?= StringHelper::truncate($new->text,150) ?>
                    </div>
                    <a href='<?= Url::to(['site/news', 'id'=>$new->id])?>' class='button'>Подробнее...</a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<div class='content c-count'>
    <div class='wrapper'>
        <h3>Факультет в числах</h3>
        <div class='title-line'></div>
        <div class='counts'>
            <div class='box'>
                <span class='number'>3</span>
                <span class='title'>Направления</span>
            </div>
            <div class='box'>
                <span class='number'>12К</span>
                <span class='title'>Выпускников</span>
            </div>
            <div class='box'>
                <span class='number'>49</span>
                <span class='title'>Грамот</span>
            </div>
            <div class='box'>
                <span class='number'>2К</span>
                <span class='title'>Студентов</span>
            </div>
        </div>
    </div>
</div>

<div class='content c-map'>
    <div id='map'></div>
</div>

