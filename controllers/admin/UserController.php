<?php

namespace app\controllers\admin;

use yii\web\Controller;

Class UserController extends Controller{
    public function actionIndex(){
        return $this->render('index');

    }
}

?>