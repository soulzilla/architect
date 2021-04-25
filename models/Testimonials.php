<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property int $id
 * @property string $full_name
 * @property string $image
 * @property string $content
 * @property int $weight
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'image', 'content', 'weight'], 'required'],
            [['content'], 'string'],
            [['weight'], 'default', 'value' => null],
            [['weight'], 'integer'],
            [['full_name', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'image' => 'Image',
            'content' => 'Content',
            'weight' => 'Weight',
        ];
    }
}
