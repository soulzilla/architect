<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%workers}}`.
 */
class m210425_125528_create_workers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%workers}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string()->notNull(),
            'image' => $this->string()->notNull(),
            'position' => $this->string()->notNull(),
            'quote' => $this->string()->notNull(),
            'weight' => $this->smallInteger()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%workers}}');
    }
}
