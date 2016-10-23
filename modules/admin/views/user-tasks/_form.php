<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Users;
use app\models\Tasks;


/* @var $this yii\web\View */
/* @var $model app\models\UserTasks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-tasks-form">

    <? $users = ArrayHelper::map(Users::find()->all(), 'id', 'login');
    $tasks = ArrayHelper::map(Tasks::find()->all(), 'id', 'task_name'); ?>

    <?php $form = ActiveForm::begin(); ?>

    <!--<?/*= $form->field($model, 'user_id')->textInput() */?>-->
    <?php echo $form->field($model, 'user_id')->dropDownList($users); ?>

    <!--<?/*= $form->field($model, 'task_id')->textInput() */?>-->
    <?php echo $form->field($model, 'task_id')->dropDownList($tasks); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
