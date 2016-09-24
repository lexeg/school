<?php

use yii\db\Migration;

/**
 * Handles the creation for table `users`.
 */
class m160924_050242_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица с пользователями\'';
        }
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(100)->notNull(),
            'middle_name' => $this->string(100)->notNull(),
            'last_name' => $this->string(100)->notNull(),
            'email_name' => $this->string(50)->notNull(),
            'login_name' => $this->string(50)->notNull(),
            'password_name' => $this->string(50)->notNull(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}
