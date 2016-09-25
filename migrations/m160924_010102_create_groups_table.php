<?php

use yii\db\Migration;

/**
 * Handles the creation for table `groups`.
 */
class m160924_010102_create_groups_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%groups}}', [
            'id' => $this->primaryKey(),
            'group_name' => $this->string(50)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%groups}}');
    }
}
