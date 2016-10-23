<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.10.2016
 * Time: 10:26
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\UserTasks;


class UserTasksController extends Controller
{
    public function actionIndex($userId)
    {
        $query = UserTasks::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->andFilterWhere(
            [
                'user_id' => $userId
            ]
        );
        return $this->render('index', ['dataProvider' => $dataProvider]);
        //$userTasks = UserTasks::find()->byUser($userId);
        /*$user = Users::findOne(Yii::$app->user->id);
        $query = Users::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->andFilterWhere(
            [
                'id' => $user->id
            ]
        );

        return $this->render('index', ['user' => $user, 'dataProvider' => $dataProvider]);*/
        //return $this->render('index', ['user_tasks' => $userTasks]);
    }
}