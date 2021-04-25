<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%testimonials}}`.
 */
class m210425_130804_create_testimonials_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%testimonials}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string()->notNull(),
            'image' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'weight' => $this->smallInteger()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%testimonials}}');
    }
}
