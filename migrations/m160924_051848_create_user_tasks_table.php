<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user_tasks`.
 */
class m160924_051848_create_user_tasks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица связи пользователей с тасками\'';
        }
        $this->createTable('{{%user_tasks}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'task_id' => $this->integer()->notNull()
        ], $tableOptions);

        // creates index for column `user_id`
        $this->createIndex(
            'idx-user_tasks-user_id',
            'user_tasks',
            'user_id'
        );

        // add foreign key for table `users`
        $this->addForeignKey(
            'fk-user_tasks-user_id',
            'user_tasks',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );

        // creates index for column `task_id`
        $this->createIndex(
            'idx-user_tasks-task_id',
            'user_tasks',
            'task_id'
        );

        // add foreign key for table `tasks`
        $this->addForeignKey(
            'fk-user_tasks-task_id',
            'user_tasks',
            'task_id',
            'tasks',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `users`
        $this->dropForeignKey(
            'fk-user_tasks-user_id',
            'user_tasks'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-user_tasks-user_id',
            'user_tasks'
        );


        // drops foreign key for table `users`
        $this->dropForeignKey(
            'fk-user_tasks-task_id',
            'user_tasks'
        );

        // drops index for column `task_id`
        $this->dropIndex(
            'idx-user_tasks-task_id',
            'user_tasks'
        );

        $this->dropTable('{{%user_tasks}}');
    }
}
