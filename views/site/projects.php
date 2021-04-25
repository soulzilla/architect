<?php

/* @var $this yii\web\View */
/* @var $models app\models\Projects[] */

$this->title = Yii::$app->name;
?>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(/images/img_bg_3.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Секрет нашего успеха</h2>
                                <h1>Наши Проекты</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="colorlib-project">
    <div class="container">
        <div class="row">
            <?php foreach ($models as $model): ?>
                <div class="col-md-6 animate-box">
                    <div class="item item-2">
                        <a href="<?= $model->image ?>" class="project image-popup-link" style="background-image: url(<?= $model->image ?>);">
                            <div class="desc-t">
                                <div class="desc-tc">
                                    <div class="desc">
                                        <h3><span><small>1</small></span> <?= $model->name ?></h3>
                                        <p><?= $model->description ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>