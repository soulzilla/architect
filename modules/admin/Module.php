<?php

namespace app\modules\admin;

use yii\web\ForbiddenHttpException;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    public $layout = '@app/modules/admin/views/layouts/main';

    /**
     * @param \yii\base\Action $action
     * @return bool
     * @throws ForbiddenHttpException
     */
    public function beforeAction($action)
    {
        if ($action->id !== 'login' && \Yii::$app->user->isGuest) {
            throw new ForbiddenHttpException();
        }

        return parent::beforeAction($action);
    }
}
