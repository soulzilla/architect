<?php

/* @var $this yii\web\View */
/* @var $model app\models\Pages */

$this->title = Yii::$app->name;
?>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(<?= $model->image ?>);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1><?= $model->title ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="colorlib-about">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-md-6">
                <div class="about animate-box">
                    <h2><?= $model->title ?></h2>
                    <p><?= $model->content ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/img_bg_4.jpg" alt="Free HTML5 Bootstrap Template by colorlib.com">
            </div>
        </div>
    </div>
</div>