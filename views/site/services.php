<?php

/* @var $this yii\web\View */
/* @var $models app\models\Services[] */
/* @var $testimonials app\models\Testimonials[] */

$this->title = Yii::$app->name;
?>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(/images/img_bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Что Мы Делаем?</h2>
                                <h1>Наши Услуги</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="colorlib-services">
    <div class="container">
        <div class="row">
            <?php foreach ($models as $model): ?>
                <div class="col-md-4 animate-box">
                    <div class="services">
							<span class="icon">
								<i class="<?= $model->icon ?>"></i>
							</span>
                        <div class="desc">
                            <h3><?= $model->name ?></h3>
                            <p><?= $model->description ?></p>
                        </div>
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
