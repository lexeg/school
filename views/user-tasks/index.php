<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.10.2016
 * Time: 10:31
 */
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
?>

<div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'user.first_name',
            'task.task_name',
            ['class' => 'yii\grid\ActionColumn']
        ],
    ]); ?>
    <?= Html::a('Назад', Url::to(['site/index'])) ?>
    <p>
        <?= Html::a('Создать задачу', Url::to(['user-tasks/create'])) ?>
    </p>
</div>
