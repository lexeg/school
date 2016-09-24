<?php

use yii\db\Migration;

/**
 * Handles the creation for table `usertasks`.
 */
class m160924_051848_create_usertasks_table extends Migration
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
        $this->createTable('usertasks', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'task_id' => $this->integer()->notNull()
        ], $tableOptions);

        // creates index for column `user_id`
        $this->createIndex(
            'idx-usertasks-user_id',
            'usertasks',
            'user_id'
        );

        // add foreign key for table `users`
        $this->addForeignKey(
            'fk-usertasks-user_id',
            'usertasks',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );

        // creates index for column `task_id`
        $this->createIndex(
            'idx-usertasks-task_id',
            'usertasks',
            'task_id'
        );

        // add foreign key for table `tasks`
        $this->addForeignKey(
            'fk-usertasks-task_id',
            'usertasks',
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
            'fk-usertasks-user_id',
            'usertasks'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-usertasks-user_id',
            'usertasks'
        );


        // drops foreign key for table `users`
        $this->dropForeignKey(
            'fk-usertasks-task_id',
            'usertasks'
        );

        // drops index for column `task_id`
        $this->dropIndex(
            'idx-usertasks-task_id',
            'usertasks'
        );

        $this->dropTable('usertasks');
    }
}
