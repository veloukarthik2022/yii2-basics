<?php

namespace app\controllers;
use \yii\rest\ActiveController;
class MemberController extends ActiveController
{
    public $modelClass = 'app\models\Member';
    public function actionIndex()
    {
        return $this->render('index');
    }

}
