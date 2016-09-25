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
            'email' => $this->string(50)->notNull(),
            'login' => $this->string(50)->notNull(),
            'password' => $this->string(50)->notNull(),
            'role_id' => $this->integer()->notNull(),
            'photo' => 'BLOB NOT NULL'
        ], $tableOptions);

        // creates index for column `role_id`
        $this->createIndex(
            'idx-users-role_id',
            'users',
            'role_id'
        );

        // add foreign key for table `roles`
        $this->addForeignKey(
            'fk-users-role_id',
            'users',
            'role_id',
            'roles',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `roles`
        $this->dropForeignKey(
            'fk-users-role_id',
            'users'
        );

        // drops index for column `role_id`
        $this->dropIndex(
            'idx-users-role_id',
            'users'
        );

        $this->dropTable('{{%users}}');
    }
}
