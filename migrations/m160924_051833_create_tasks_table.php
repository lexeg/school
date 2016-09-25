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
        $this->createTable('{{%tasks}}', [
            'id' => $this->primaryKey(),
            'task_name' => $this->string(100),
            'description' => $this->text()->notNull(),
            'date_start' => $this->dateTime(),
            'date_end' => $this->dateTime(),
            'group_id' => $this->integer()->notNull(),
            'state_id' => $this->integer()->notNull(),
            'priority_id' => $this->integer()->notNull()
        ], $tableOptions);

        // creates index for column `group_id`
        $this->createIndex(
            'idx_tasks_group_id',
            'tasks',
            'group_id'
        );

        // add foreign key for table `groups`
        $this->addForeignKey(
            'fk-tasks-group_id',
            'tasks',
            'group_id',
            'groups',
            'id',
            'CASCADE'
        );

        // creates index for column `state_id`
        $this->createIndex(
            'idx_tasks_state_id',
            'tasks',
            'state_id'
        );

        // add foreign key for table `task_states`
        $this->addForeignKey(
            'fk-tasks-state_id',
            'tasks',
            'state_id',
            'task_states',
            'id',
            'CASCADE'
        );

        // creates index for column `priority_id`
        $this->createIndex(
            'idx_tasks_priority_id',
            'tasks',
            'priority_id'
        );

        // add foreign key for table `task_priorities`
        $this->addForeignKey(
            'fk-tasks-priority_id',
            'tasks',
            'priority_id',
            'task_priorities',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `groups`
        $this->dropForeignKey(
            'fk-tasks-group_id',
            'tasks'
        );

        // drops index for column `group_id`
        $this->dropIndex(
            'idx_tasks_group_id',
            'tasks'
        );

        // drops foreign key for table `task_states`
        $this->dropForeignKey(
            'fk-tasks-state_id',
            'tasks'
        );

        // drops index for column `state_id`
        $this->dropIndex(
            'idx_tasks_state_id',
            'tasks'
        );

        // drops foreign key for table `task_priorities`
        $this->dropForeignKey(
            'fk-tasks-priority_id',
            'tasks'
        );

        // drops index for column `priority_id`
        $this->dropIndex(
            'idx_tasks_priority_id',
            'tasks'
        );

        $this->dropTable('{{%tasks}}');
    }
}
