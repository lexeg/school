<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TaskStates]].
 *
 * @see TaskStates
 */
class TaskStatesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TaskStates[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TaskStates|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
