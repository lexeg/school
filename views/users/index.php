<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29.09.2016
 * Time: 20:05
 */
use yii\helpers\Html;
?>

<div>
    <table class="table table-bordered">
        <tr>
            <th><?php echo $users[0]->getAttributeLabel('first_name') ?></th>
            <th><?php echo $users[0]->getAttributeLabel('middle_name') ?></th>
            <th><?php echo $users[0]->getAttributeLabel('last_name') ?></th>
            <th><?php echo $users[0]->getAttributeLabel('email') ?></th>
            <th><?php echo $users[0]->getAttributeLabel('login') ?></th>
            <th><?php echo $users[0]->getAttributeLabel('password') ?></th>
            <th><?php echo $users[0]->getAttributeLabel('role_id') ?></th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo Html::encode($user->first_name) ?></td>
            <td><?php echo Html::encode($user->middle_name) ?></td>
            <td><?php echo Html::encode($user->last_name) ?></td>
            <td><?php echo Html::encode($user->email) ?></td>
            <td><?php echo Html::encode($user->login) ?></td>
            <td><?php echo Html::encode($user->password) ?></td>
            <td><?php echo Html::encode($user->role->role_name) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
