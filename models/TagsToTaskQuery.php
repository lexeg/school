<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TagsToTask]].
 *
 * @see TagsToTask
 */
class TagsToTaskQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TagsToTask[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TagsToTask|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
