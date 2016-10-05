<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TaskPriorities */

$this->title = 'Update Task Priorities: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Task Priorities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-priorities-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
