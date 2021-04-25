<?php
use app\enums\BlockTypesEnum;
use app\enums\ContactsEnum;
use app\models\Blocks;
use app\models\Contacts;
use app\models\Pages;
use app\models\Publications;
use yii\helpers\Url;

?>

<div id="colorlib-subscribe">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 colorlib-heading animate-box">
                <?php $subscribeBlock = Blocks::getBlock(BlockTypesEnum::SUBSCRIBE_TEXT) ?>
                <h2><?= $subscribeBlock->title ?></h2>
                <div class="row">
                    <div class="col-md-7">
                        <p><?= $subscribeBlock->content ?></p>
                    </div>
                    <div class="col-md-5">
                        <form class="form-inline qbstp-header-subscribe" action="<?= Url::to(['/subscribe']) ?>" method="post">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-0">
                                    <div class="form-group">
                                        <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Введите свою почту">
                                        <button type="submit" class="btn btn-primary">Подписаться</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if (Yii::$app->session->hasFlash('subscriptionFormSubmitted')): ?>
            <div class="alert alert-success">
                Спасибо за подписку! Теперь Вы будете получать уведомление о новостях на свою почту!
            </div>
        <?php endif; ?>
    </div>
</div>

<footer id="colorlib-footer" role="contentinfo">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-3 colorlib-widget">
                <?php $aboutBlock = Blocks::getBlock(BlockTypesEnum::ABOUT_SMALL_TEXT) ?>
                <h4><?= $aboutBlock->title ?></h4>
                <p><?= $aboutBlock->content ?></p>
            </div>
            <?php $publications = Publications::find()->limit(3)->orderBy(['created_at' => SORT_DESC])->all(); ?>
            <div class="col-md-3 col-md-push-1">
                <h4>Блог</h4>
                <ul class="colorlib-footer-links">
                    <?php foreach ($publications as $publication): ?>
                        <li>
                            <span>&mdash; <?= Yii::$app->formatter->asDate($publication->created_at) ?></span>
                            <a href="#"><?= $publication->title ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-3 col-md-push-1 colorlib-widget">
                <h4>Информация</h4>
                <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="<?= Url::to(['/site/about']) ?>"><i class="icon-check"></i> О компании</a></li>
                        <?php $pages = Pages::find()->all() ?>
                        <?php foreach ($pages as $page): ?>
                            <li><a href="<?= Url::to(['/site/page', 'id' => $page->id]) ?>"><i class="icon-check"></i> <?= $page->title ?></a></li>
                        <?php endforeach; ?>
                        <li><a href="<?= Url::to(['/site/services']) ?>"><i class="icon-check"></i> Наши услуги</a></li>
                    </ul>
                </p>
            </div>

            <div class="col-md-3 col-md-push-1">
                <h4>Контактные данные</h4>
                <ul class="colorlib-footer-links">
                    <?php $contacts = Contacts::find()->orderBy(['weight' => SORT_ASC])->all() ?>
                    <?php foreach ($contacts as $contact): ?>
                        <li><i class="<?= ContactsEnum::icons()[$contact->type] ?>"></i> <?= $contact->content ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
