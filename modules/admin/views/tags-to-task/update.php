<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TagsToTask */

$this->title = 'Update Tags To Task: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tags To Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tags-to-task-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
