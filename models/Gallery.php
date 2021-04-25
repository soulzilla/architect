<?php

namespace app\models;

use yii\base\Model;

class Gallery extends Model
{
    public $file;

    public function rules()
    {
        return [
            ['file', 'safe']
        ];
    }
}
