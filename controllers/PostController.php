<?php
    namespace app\controllers;
    use Yii;

    Class PostController extends AppController{

        public $layout = 'basic';

        public function actionIndex(){
/*             $names = ['Ivanov', 'Petrrov', 'Sidorov']; */
/*             $this->debug(Yii::$app); */
            return $this->render('test');
        }
        public function actionShow(){
            // $this->layout = 'basic';
            return $this->render('show');
        }
    }
?>
