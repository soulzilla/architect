<?php

use yii\db\Migration;

/**
 * Class m210425_142836_add_image_projects
 */
class m210425_142836_add_image_projects extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('projects', 'image', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('projects', 'image');
    }
}
