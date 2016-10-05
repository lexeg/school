<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 04.10.2016
 * Time: 19:43
 */
namespace app\modules\admin\components;

use yii\filters\AccessControl;

class Controller extends \yii\web\Controller
{
    public function behaviors()
    {
        $return = parent::behaviors();
        $behaviors = [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
        return array_merge($return, $behaviors);
    }
}