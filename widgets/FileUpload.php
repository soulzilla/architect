<?php

namespace app\widgets;

use app\models\Gallery;
use yii\bootstrap\Widget;

class FileUpload extends Widget
{
    public $model;
    public $attribute;

    public function run()
    {
        $gallery = new Gallery();
        return $this->render('upload', [
            'model' => $this->model,
            'attribute' => $this->attribute,
            'gallery' => $gallery
        ]);
    }
}
