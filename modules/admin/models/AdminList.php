<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 08.10.2016
 * Time: 11:10
 */

namespace app\modules\admin\models;

use app\models\Users;
use Yii;
use Yii\base\Model;


class AdminList extends Model
{
    public function getUsers()
    {
        return Users::find()->all();
    }
}