<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TaskStates */

$this->title = 'Create Task States';
$this->params['breadcrumbs'][] = ['label' => 'Task States', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-states-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
