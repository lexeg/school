<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[UserTasks]].
 *
 * @see UserTasks
 */
class UserTasksQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UserTasks[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserTasks|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function byUser($userId)
    {
        return $this->andFilterWhere(['user_id' => $userId]);
    }
}
