<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publications}}`.
 */
class m210425_125146_create_publications_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publications}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'image' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultValue(new \yii\db\Expression('NOW()'))
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%publications}}');
    }
}
