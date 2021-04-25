<?php

/* @var $this yii\web\View */
/* @var $workers app\models\Workers[] */
/* @var $testimonials app\models\Testimonials[] */

use app\enums\BlockTypesEnum;
use app\models\Blocks;

$this->title = Yii::$app->name;
?>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(/images/img_bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Информация</h2>
                                <h1>О компании</h1>
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
                    <?php $aboutBlock = Blocks::getBlock(BlockTypesEnum::ABOUT_FULL_TEXT) ?>
                    <h2><?= $aboutBlock->title ?></h2>
                    <p><?= $aboutBlock->content ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/img_bg_4.jpg" alt="Free HTML5 Bootstrap Template by colorlib.com">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center animate-box colorlib-heading animate-box">
                <?php $teamBlock = Blocks::getBlock(BlockTypesEnum::TEAM_TEXT) ?>
                <h2><?= $teamBlock->title ?></h2>
                <p><?= $teamBlock->content ?></p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($workers as $worker): ?>

                <div class="col-md-4 text-center animate-box">
                    <div class="staff staff-img" style="background-image: url(<?= $worker->image ?>);">
                        <a href="#" class="desc">
                            <h3><?= $worker->full_name ?></h3>
                            <span><?= $worker->position ?></span>
                            <div class="parag">
                                <p><?= $worker->quote ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div id="colorlib-testimony" class="colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-4 animate-box colorlib-heading animate-box">
                <span class="sm">Отзывы</span>
                <h2><span class="thin">Что говорят</span> <span class="thick">наши клиенты</span></h2>
            </div>
            <div class="col-md-7 col-md-push-1">
                <div class="row animate-box">
                    <span class="icon"><i class="icon-quotes-left"></i></span>
                    <div class="owl-carousel1">
                        <?php foreach ($testimonials as $testimonial): ?>
                            <div class="item">
                                <div class="testimony-slide active">
                                    <div class="testimony-wrap">
                                        <figure>
                                            <img src="<?= $testimonial->image ?>" alt="user">
                                        </figure>
                                        <blockquote>
                                            <span><?= $testimonial->full_name ?></span>
                                            <p><?= $testimonial->content ?></p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
