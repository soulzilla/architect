<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workers".
 *
 * @property int $id
 * @property string $full_name
 * @property string $image
 * @property string $position
 * @property string $quote
 * @property int $weight
 */
class Workers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'image', 'position', 'quote', 'weight'], 'required'],
            [['weight'], 'default', 'value' => null],
            [['weight'], 'integer'],
            [['full_name', 'image', 'position', 'quote'], 'string', 'max' => 255],
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
            'position' => 'Position',
            'quote' => 'Quote',
            'weight' => 'Weight',
        ];
    }
}
