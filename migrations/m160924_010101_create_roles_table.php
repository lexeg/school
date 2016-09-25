<?php

use yii\db\Migration;

/**
 * Handles the creation for table `roles`.
 */
class m160924_010101_create_roles_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%roles}}', [
            'id' => $this->primaryKey(),
            'role_name' => $this->string(50)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%roles}}');
    }
}
