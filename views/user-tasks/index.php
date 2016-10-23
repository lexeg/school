<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.10.2016
 * Time: 10:31
 */
use yii\grid\GridView;
?>

<div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'user.first_name',
            'task.task_name',
        ],
    ]); ?>
</div>
