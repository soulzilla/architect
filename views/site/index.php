<?php

/* @var $this yii\web\View */
/* @var $banners app\models\Banners[] */
/* @var $projects app\models\Projects[] */
/* @var $services app\models\Services[] */
/* @var $publications app\models\Publications[] */
/* @var $workers app\models\Workers[] */
/* @var $testimonials app\models\Testimonials[] */

use app\enums\BlockTypesEnum;
use app\models\Blocks;
use yii\helpers\Url;

$this->title = Yii::$app->name;
?>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <?php foreach ($banners as $banner): ?>
                <li style="background-image: url(<?= $banner->image ?>);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2><?= $banner->content ?></h2>
                                    <h1><?= $banner->title ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>

<div id="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-4 animate-box colorlib-heading animate-box">
                <span class="sm">Добро пожаловать!</span>
                <?php $welcomeBlock = Blocks::getBlock(BlockTypesEnum::WELCOME_TEXT) ?>
                <h2><?= $welcomeBlock->title ?></h2>
            </div>
            <div class="col-md-4 col-md-pull-4 animate-box">
                <div class="box text-center">
                    <span class="num">25</span>
                    <span class="yr">Лет</span>
                    <span class="thin">Опыта</span>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <p><?= $welcomeBlock->content ?></p>
            </div>
        </div>
    </div>
</div>


<div id="colorlib-project">
    <div class="container">
        <div class="row">
            <div class="col-md-4 animate-box colorlib-heading animate-box">
                <span class="sm">Наши работы</span>
                <?php $projectsBlock = Blocks::getBlock(BlockTypesEnum::DONE_PROJECTS) ?>
                <h2><?= $projectsBlock->title ?></h2>
                <p><?= $projectsBlock->content ?></p>
                <p><a href="<?= Url::to(['/site/projects']) ?>">Все проекты <i class="icon-arrow-right3"></i></a></p>
            </div>
            <div class="col-md-7 col-md-push-1">
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="owl-carousel owl-carousel2 project-wrap">
                            <?php foreach ($projects as $key => $project): ?>
                                <div class="item">
                                    <a href="<?= $project->image ?>" class="project image-popup-link" style="background-image: url(<?= $project->image ?>);">
                                        <div class="desc-t">
                                            <div class="desc-tc">
                                                <div class="desc">
                                                    <h3><span><small><?= $key + 1 ?></small></span> <?= $project->name ?></h3>
                                                    <p><?= $project->description ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(/images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="flaticon-skyline"></i></span>
                <span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Проектов</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="flaticon-engineer"></i></span>
                <span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Сотрудников</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
                <span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Конструкторов</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="flaticon-worker"></i></span>
                <span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Партнёров</span>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-services" class="colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-4 animate-box colorlib-heading animate-box">
                <span class="sm">Что мы предлагаем?</span>
                <?php $servicesBlock = Blocks::getBlock(BlockTypesEnum::SERVICES_TEXT) ?>
                <h2><?= $servicesBlock->title ?></h2>
                <p><?= $servicesBlock->content ?></p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="wrap">
                        <?php foreach ($services as $service): ?>
                            <div class="col-md-6 animate-box">
                                <div class="services">
										<span class="icon">
											<i class="<?= $service->icon ?>"></i>
										</span>
                                    <div class="desc">
                                        <h3><?= $service->name ?></h3>
                                        <p><?= $service->description ?></p>
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

<div id="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-4 animate-box colorlib-heading animate-box">
                <span class="sm">Недавние публикации</span>
                <?php $blogBlock = Blocks::getBlock(BlockTypesEnum::BLOG_TEXT) ?>
                <h2><?= $blogBlock->title ?></h2>
                <p><?= $blogBlock->content ?></p>
                <p><a href="<?= Url::to(['/site/blog']) ?>">Подробнее <i class="icon-arrow-right3"></i></a></p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="wrap">
                        <?php foreach ($publications as $publication): ?>
                            <div class="blog-entry animate-box">
                                <a href="<?= Url::to(['/site/blog']) ?>" class="blog-img" style="background-image: url(<?= $publication->image ?>);"></a>
                                <div class="desc">
                                    <span>&mdash; <?= Yii::$app->formatter->asDate($publication->created_at) ?> </span>
                                    <h2><a href="<?= Url::to(['/site/blog']) ?>"><?= $publication->title ?></a></h2>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-about">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-8 animate-box colorlib-heading animate-box">
                <span class="sm">Команда</span>
                <?php $teamBlock = Blocks::getBlock(BlockTypesEnum::TEAM_TEXT) ?>
                <h2><?= $teamBlock->title ?></h2>
                <p><?= $teamBlock->content ?></p>
            </div>
            <div class="col-md-8 col-md-pull-4">
                <div class="row">
                    <div class="wrap-2">
                        <?php foreach ($workers as $worker): ?>
                            <div class="col-md-6 text-center animate-box">
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
