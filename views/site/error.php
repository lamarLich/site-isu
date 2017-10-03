<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Url;

$this->title = $name;
?>

<div class='content c-cafed'>
<div class='wrapper'>
        <h2>Страница не найдена (#404)</h2>
        <div class="alert alert-danger" role="alert">
            Страницы, на которую вы попали, не существует.
        </div>
        <p>
            <b>Вы можете попробовать следующее:</b>
            <br><br> <a href = "<?= Url::home()?> ">- Перейти к главной странице сайта </a>
            <br><br> - Проверить правильность введенного адреса
            <br><br> - Вернуться туда откуда пришли ( нажать кнопку "Назад" в своем браузере )
        </p>

</div>
</div>

