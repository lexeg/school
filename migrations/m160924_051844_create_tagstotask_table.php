<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tagstotask`.
 */
class m160924_051844_create_tagstotask_table extends Migration
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
        $this->createTable('tagstotask', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer()->notNull(),
            'tag_id' => $this->integer()->notNull()
        ], $tableOptions);

        // creates index for column `task_id`
        $this->createIndex(
            'idx-tagstotask-task_id',
            'tagstotask',
            'task_id'
        );

        // add foreign key for table `tasks`
        $this->addForeignKey(
            'fk-tagstotask-task_id',
            'tagstotask',
            'task_id',
            'tasks',
            'id',
            'CASCADE'
        );


        // creates index for column `tag_id`
        $this->createIndex(
            'idx-tagstotask-tag_id',
            'tagstotask',
            'tag_id'
        );

        // add foreign key for table `tags`
        $this->addForeignKey(
            'fk-tagstotask-tag_id',
            'tagstotask',
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
            'fk-tagstotask-task_id',
            'tagstotask'
        );

        // drops index for column `task_id`
        $this->dropIndex(
            'idx-tagstotask-task_id',
            'tagstotask'
        );


        // drops foreign key for table `tags`
        $this->dropForeignKey(
            'fk-tagstotask-tag_id',
            'tagstotask'
        );

        // drops index for column `tag_id`
        $this->dropIndex(
            'idx-tagstotask-tag_id',
            'tagstotask'
        );

        $this->dropTable('tagstotask');
    }
}
