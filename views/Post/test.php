<h1>Test Action</h1>

<?php
    /* var_dump(Yii::$app); */
/*     $names = ['Ivanov', 'Petrrov', 'Sidorov'];
    \app\controllers\debug($names);
    \app\controllers\debug(Yii::$app); */
/*     debug(Yii::$app); */
    if(Yii::$app->request->isAjax ){
        debug($_GET);
    }
?>