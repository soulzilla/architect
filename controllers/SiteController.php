<?php

namespace app\controllers;

use app\models\Banners;
use app\models\Contacts;
use app\models\Messages;
use app\models\Pages;
use app\models\Projects;
use app\models\Publications;
use app\models\Services;
use app\models\Subscribers;
use app\models\Testimonials;
use app\models\Workers;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'banners' => Banners::find()->orderBy(['weight' => 'asc'])->all(),
            'projects' => Projects::find()->limit(3)->all(),
            'services' => Services::find()->orderBy(['weight' => 'asc'])->all(),
            'publications' => Publications::find()->limit(3)->all(),
            'workers' => Workers::find()->orderBy(['weight' => 'asc'])->limit(2)->all(),
            'testimonials' => Testimonials::find()->orderBy(['weight' => 'asc'])->all()
        ]);
    }

    public function actionProjects()
    {
        $projects = Projects::find()->all();

        return $this->render('projects', ['models' => $projects]);
    }

    public function actionServices()
    {
        $services = Services::find()->orderBy(['weight' => SORT_ASC])->all();

        return $this->render('services', [
            'models' => $services,
            'testimonials' => Testimonials::find()->orderBy(['weight' => 'asc'])->all()
        ]);
    }

    public function actionBlog()
    {
        return $this->render('blog', [
            'models' => Publications::find()->orderBy(['created_at' => SORT_DESC])->all()
        ]);
    }

    public function actionPage($id)
    {
        return $this->render('page', [
            'model' => Pages::findOne($id)
        ]);
    }

    public function actionSubscribe()
    {
        $model = new Subscribers();
        $model->email = Yii::$app->request->post('email');

        if ($model->save()) {
            Yii::$app->session->setFlash('subscriptionFormSubmitted');
        }

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new Messages();
        if (Yii::$app->request->post()) {
            $model->attributes = Yii::$app->request->post();
            $model->save();
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
            'contacts' => Contacts::find()->orderBy(['type' => SORT_ASC])->all()
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about', [
            'testimonials' => Testimonials::find()->orderBy(['weight' => 'asc'])->all(),
            'workers' => Workers::find()->orderBy(['weight' => 'asc'])->all(),
        ]);
    }
}
