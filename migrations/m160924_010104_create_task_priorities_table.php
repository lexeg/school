<?php

use yii\db\Migration;

/**
 * Handles the creation for table `task_priorities`.
 */
class m160924_010104_create_task_priorities_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%task_priorities}}', [
            'id' => $this->primaryKey(),
            'priority_name' => $this->string(50)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%task_priorities}}');
    }
}
