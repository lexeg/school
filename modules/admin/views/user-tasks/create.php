<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserTasks */

$this->title = 'Create User Tasks';
$this->params['breadcrumbs'][] = ['label' => 'User Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-tasks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
