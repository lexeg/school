<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tags_to_task`.
 */
class m160924_051844_create_tags_to_task_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица связи тэгов с тасками\'';
        }
        $this->createTable('{{%tags_to_task}}', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer()->notNull(),
            'tag_id' => $this->integer()->notNull()
        ], $tableOptions);

        // creates index for column `task_id`
        $this->createIndex(
            'idx-tags_to_task-task_id',
            'tags_to_task',
            'task_id'
        );

        // add foreign key for table `tasks`
        $this->addForeignKey(
            'fk-tags_to_task-task_id',
            'tags_to_task',
            'task_id',
            'tasks',
            'id',
            'CASCADE'
        );


        // creates index for column `tag_id`
        $this->createIndex(
            'idx-tags_to_task-tag_id',
            'tags_to_task',
            'tag_id'
        );

        // add foreign key for table `tags`
        $this->addForeignKey(
            'fk-tags_to_task-tag_id',
            'tags_to_task',
            'tag_id',
            'tags',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `tasks`
        $this->dropForeignKey(
            'fk-tags_to_task-task_id',
            'tags_to_task'
        );

        // drops index for column `task_id`
        $this->dropIndex(
            'idx-tags_to_task-task_id',
            'tags_to_task'
        );


        // drops foreign key for table `tags`
        $this->dropForeignKey(
            'fk-tags_to_task-tag_id',
            'tags_to_task'
        );

        // drops index for column `tag_id`
        $this->dropIndex(
            'idx-tags_to_task-tag_id',
            'tags_to_task'
        );

        $this->dropTable('{{%tags_to_task}}');
    }
}
