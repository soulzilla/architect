<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Messages */
/* @var $contacts app\models\Contacts[] */

use app\enums\ContactsEnum;
use yii\bootstrap\ActiveForm;

$this->title = Yii::$app->name;
?>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(/images/img_bg_4.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Напишите Нам</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h2>Контактные данные</h2>
                <div class="row contact-info-wrap">
                    <?php foreach ($contacts as $contact): ?>
                        <div class="col-md-3">
                            <p><span><i class="<?= ContactsEnum::icons()[$contact->type] ?>"></i></span> <?= $contact->content ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h2>Напишите нам</h2>
                <?php $form = ActiveForm::begin() ?>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="fname">Имя</label>
                            <input type="text" id="fname" name="first_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Фамилия</label>
                            <input type="text" id="lname" name="last_name" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="subject">Тема</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="message">Ваше сообщение</label>
                            <textarea name="content" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>

                <?php ActiveForm::end() ?>

                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                    <div class="alert alert-success">
                        Спасибо за Ваше обращение! Мы обработаем информацию в ближайшее время и отправим ответ Вам на почту.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>