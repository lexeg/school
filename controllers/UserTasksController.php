<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.10.2016
 * Time: 10:26
 */

namespace app\controllers;

use app\models\UserTasksQuery;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\Users;
use app\models\UserTasks;
use app\models\Tasks;
use Yii;
use yii\web\NotFoundHttpException;


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

    public function actionView($id)
    {
        $task = UserTasks::findOne($id);
        return $this->render('view', [
            'model' => $this->findModel($task->task_id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Tasks();
        //$var = Yii::$app->request->post();
        //var_dump($var);
        //die();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            $userTasks = UserTasksQuery::create()
            $user = Users::findOne(Yii::$app->user->id);

            //UserTasksQuery::create(['user_id' => $user->id, 'task_id' => $model->id]);
            $userTasks= new UserTasks();
            $userTasks->user_id = $user->id;
            $userTasks->task_id = $model->id;
            $userTasks->save();
            $task = UserTasks::findOne(['user_id' => $user->id, 'task_id' => $model->id]);
            return $this->redirect(['view', 'id' => $task->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $task = UserTasks::findOne($id);
        $model = $this->findModel($task->task_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $task->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $task = UserTasks::findOne($id);
        $this->findModel($task->task_id)->delete();

        return $this->redirect(['user-tasks/index', 'userId' => Yii::$app->user->id]);
    }

    protected function findModel($id)
    {
        if (($model = Tasks::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}