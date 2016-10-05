<?php

use yii\db\Migration;

class m161004_154256_add_admin_user extends Migration
{
    public function up()
    {
        $user = new \app\models\Users();
        $user->attributes = [
            'first_name' => 'Admin',
            'middle_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'Admin',
            'login' => 'Admin',
            'password' => \Yii::$app->getSecurity()->generatePasswordHash('12345'),
            'role_id' => '1'
        ];
        $user->save();
    }

    public function down()
    {
        $model = \app\models\Users::find()->byLogin('Admin')->one();
        if($model) $model->delete();
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
