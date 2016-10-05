<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TaskPriorities */

$this->title = 'Create Task Priorities';
$this->params['breadcrumbs'][] = ['label' => 'Task Priorities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-priorities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
