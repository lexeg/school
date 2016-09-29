<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%task_states}}".
 *
 * @property integer $id
 * @property string $state_name
 *
 * @property Tasks[] $tasks
 */
class TaskStates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%task_states}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_name'], 'required'],
            [['state_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state_name' => 'State Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Tasks::className(), ['state_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TaskStatesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TaskStatesQuery(get_called_class());
    }
}
