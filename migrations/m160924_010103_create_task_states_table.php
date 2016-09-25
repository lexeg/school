<?php

use yii\db\Migration;

/**
 * Handles the creation for table `task_states`.
 */
class m160924_010103_create_task_states_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%task_states}}', [
            'id' => $this->primaryKey(),
            'state_name' => $this->string(50)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%task_states}}');
    }
}
