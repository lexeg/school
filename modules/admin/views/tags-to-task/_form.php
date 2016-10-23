<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tasks;
use app\models\Tags;

/* @var $this yii\web\View */
/* @var $model app\models\TagsToTask */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tags-to-task-form">

    <? $tasks = ArrayHelper::map(Tasks::find()->all(), 'id', 'task_name');
    $tags = ArrayHelper::map(Tags::find()->all(), 'id', 'tag_name'); ?>

    <?php $form = ActiveForm::begin(); ?>

    <!--<?/*= $form->field($model, 'task_id')->textInput() */?>-->
    <?php echo $form->field($model, 'task_id')->dropDownList($tasks); ?>

    <!--<?/*= $form->field($model, 'tag_id')->textInput() */?>-->
    <?php echo $form->field($model, 'tag_id')->dropDownList($tags); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
