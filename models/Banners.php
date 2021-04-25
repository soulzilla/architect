<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "banners".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $image
 * @property int $weight
 */
class Banners extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'image', 'weight'], 'required'],
            [['weight'], 'default', 'value' => null],
            [['weight'], 'integer'],
            [['title', 'content', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'image' => 'Image',
            'weight' => 'Weight',
        ];
    }
}
