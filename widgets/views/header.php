<?php
use yii\helpers\Url;
?>

<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo"><a href="/"><?= Yii::$app->name ?></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="<?= Url::current() == '/' ? 'active' : '' ?>"><a href="/">Главная</a></li>
                        <li class="<?= Url::current() == '/projects' ? 'active' : '' ?>"><a href="<?= Url::to(['/site/projects']) ?>">Проекты</a></li>
                        <li class="<?= Url::current() == '/services' ? 'active' : '' ?>"><a href="<?= Url::to(['/site/services']) ?>">Услуги</a></li>
                        <li class="<?= Url::current() == '/blog' ? 'active' : '' ?>"><a href="<?= Url::to(['/site/blog']) ?>">Блог</a></li>
                        <li class="<?= Url::current() == '/about' ? 'active' : '' ?>"><a href="<?= Url::to(['/site/about']) ?>">О компании</a></li>
                        <li class="<?= Url::current() == '/contact' ? 'active' : '' ?>"><a href="<?= Url::to(['/site/contact']) ?>">Обратная связь</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
