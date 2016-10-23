<?php

use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Groups;
use app\models\TaskStates;
use app\models\TaskPriorities;

/* @var $this yii\web\View */
/* @var $model app\models\Tasks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tasks-form">

    <? $groups = ArrayHelper::map(Groups::find()->all(), 'id', 'group_name');
       $task_states = ArrayHelper::map(TaskStates::find()->all(), 'id', 'state_name');
       $task_priorities = ArrayHelper::map(TaskPriorities::find()->all(), 'id', 'priority_name'); ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'task_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_start')->widget(DatePicker::className(),['dateFormat' => 'dd-MM-yyyy',]) ?>

    <?= $form->field($model, 'date_end')->widget(DatePicker::className(),['dateFormat' => 'dd-MM-yyyy']) ?>

    <!--<?/*= $form->field($model, 'group_id')->textInput() */?>-->
    <?php echo $form->field($model, 'group_id')->dropDownList($groups); ?>

    <!--<?/*= $form->field($model, 'state_id')->textInput() */?>-->
    <?php echo $form->field($model, 'state_id')->dropDownList($task_states); ?>

    <!--<?/*= $form->field($model, 'priority_id')->textInput() */?>-->
    <?php echo $form->field($model, 'priority_id')->dropDownList($task_priorities); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
