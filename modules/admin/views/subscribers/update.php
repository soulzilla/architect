<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subscribers */

$this->title = 'Update Subscribers: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Subscribers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subscribers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
