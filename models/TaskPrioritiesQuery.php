<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TaskPriorities]].
 *
 * @see TaskPriorities
 */
class TaskPrioritiesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TaskPriorities[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TaskPriorities|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
