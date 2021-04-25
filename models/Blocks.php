<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blocks".
 *
 * @property int $id
 * @property int $type
 * @property string|null $title
 * @property string|null $content
 */
class Blocks extends \yii\db\ActiveRecord
{
    public static $_blocks;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blocks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['type'], 'default', 'value' => null],
            [['type'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }

    /**
     * @param $type
     * @return mixed|\yii\db\ActiveRecord|null|Blocks
     */
    public static function getBlock($type)
    {
        if (!self::$_blocks) {
            self::$_blocks = Blocks::find()->cache(300)->all();
        }

        foreach (self::$_blocks as $block) {
            if ($block->type == $type) {
                return $block;
            }
        }

        return null;
    }
}
