<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserTasks */

$this->title = 'Update User Tasks: ' . $model->id;
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-tasks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
