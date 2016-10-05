<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TagsToTask */

$this->title = 'Create Tags To Task';
$this->params['breadcrumbs'][] = ['label' => 'Tags To Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-to-task-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
