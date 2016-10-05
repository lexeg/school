<?php

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

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'task_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_start')->widget(DatePicker::className()) ?>

    <?= $form->field($model, 'date_end')->widget(DatePicker::className(), array('dateFormat' => 'yyyy-MM-dd', 'language' => 'ru',
        'options' => 'class=\"form-control\"')) ?>

    <!--<? /*$form->field($model, 'group_id')->textInput() */?>-->
    <? $groups = ArrayHelper::map(Groups::find()->all(), 'id', 'group_name'); ?>
    <?php echo $form->field($model, 'group_id')->dropDownList($groups); ?>

    <?= $form->field($model, 'state_id')->textInput() ?>

    <?= $form->field($model, 'priority_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
