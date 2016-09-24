<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tasks`.
 */
class m160924_051833_create_tasks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица с задачами\'';
        }
        $this->createTable('tasks', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'description' => $this->text()->notNull(),
            'date_start' => $this->dateTime(),
            'date_end' => $this->dateTime()
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tasks');
    }
}
