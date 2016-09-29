<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tasks}}".
 *
 * @property integer $id
 * @property string $task_name
 * @property string $description
 * @property string $date_start
 * @property string $date_end
 * @property integer $group_id
 * @property integer $state_id
 * @property integer $priority_id
 *
 * @property TagsToTask[] $tagsToTasks
 * @property Groups $group
 * @property TaskPriorities $priority
 * @property TaskStates $state
 * @property UserTasks[] $userTasks
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tasks}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'group_id', 'state_id', 'priority_id'], 'required'],
            [['description'], 'string'],
            [['date_start', 'date_end'], 'safe'],
            [['group_id', 'state_id', 'priority_id'], 'integer'],
            [['task_name'], 'string', 'max' => 100],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['priority_id'], 'exist', 'skipOnError' => true, 'targetClass' => TaskPriorities::className(), 'targetAttribute' => ['priority_id' => 'id']],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => TaskStates::className(), 'targetAttribute' => ['state_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task_name' => 'Task Name',
            'description' => 'Description',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'group_id' => 'Group ID',
            'state_id' => 'State ID',
            'priority_id' => 'Priority ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagsToTasks()
    {
        return $this->hasMany(TagsToTask::className(), ['task_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriority()
    {
        return $this->hasOne(TaskPriorities::className(), ['id' => 'priority_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(TaskStates::className(), ['id' => 'state_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserTasks()
    {
        return $this->hasMany(UserTasks::className(), ['task_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TasksQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TasksQuery(get_called_class());
    }
}
