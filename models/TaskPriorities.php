<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%task_priorities}}".
 *
 * @property integer $id
 * @property string $priority_name
 *
 * @property Tasks[] $tasks
 */
class TaskPriorities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%task_priorities}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['priority_name'], 'required'],
            [['priority_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'priority_name' => 'Priority Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Tasks::className(), ['priority_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TaskPrioritiesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TaskPrioritiesQuery(get_called_class());
    }
}
