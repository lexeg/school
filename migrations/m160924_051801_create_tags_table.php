<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tags`.
 */
class m160924_051801_create_tags_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица с тэгами\'';
        }
        $this->createTable('{{%tags}}', [
            'id' => $this->primaryKey(),
            'tag_name' => $this->string(10)->notNull()
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%tags}}');
    }
}
