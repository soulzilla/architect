<?php

/* @var $this yii\web\View */
/* @var $models app\models\Publications[] */

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
                                <h2>Читайте о событиях</h2>
                                <h1>Наш Блог</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="colorlib-blog">
    <div class="container">
        <div class="row">
            <?php foreach ($models as $model): ?>
                <article class="animate-box">
                    <div class="blog-img" style="background-image: url(<?= $model->image ?>);"></div>
                    <div class="entry">
                        <div class="meta text-center">
                            <p>
                                <?= Yii::$app->formatter->asDate($model->created_at) ?>
                            </p>
                        </div>
                        <h2><?= $model->title ?></h2>
                        <p><?= $model->content ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</div>
