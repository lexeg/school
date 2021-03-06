<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\TaskStatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Task States';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-states-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Task States', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'state_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
