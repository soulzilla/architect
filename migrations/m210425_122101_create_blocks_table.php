<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blocks}}`.
 */
class m210425_122101_create_blocks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blocks}}', [
            'id' => $this->primaryKey(),
            'type' => $this->smallInteger()->notNull(),
            'title' => $this->string(),
            'content' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blocks}}');
    }
}
