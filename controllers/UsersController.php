<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29.09.2016
 * Time: 20:01
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller
{
    public function actionIndex()
    {
        $users = Users::find()->all();
        foreach ($users as $user){
            echo $user->first_name;
        }
        return $this->render('index', ['users' => $users]);
    }
}