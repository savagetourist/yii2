<?php
    namespace app\controllers;

use app\models\category;
use Yii;
    use app\models\TestForm;

    Class PostController extends AppController{

        public $layout = 'basic';

        public function actionIndex(){
            if (Yii::$app->request->isAjax){
                debug(Yii::$app->request->post());
            }

            // $post = TestForm::findOne(2); //Получение и удаление поля
            // $post->email = '211@2.com';
            // $post->save();
            // debug($post);

            // $post->delete();

            // TestForm::deleteAll(['>', 'id', 3]);
             TestForm::deleteAll();

            $model = new TestForm();
            // $model->name = 'Автор';
            // $model->email = 'mail@mil.com';
            // $model->text = 'Текст сообщения';
            // $model->save();

            if ($model->load(Yii::$app->request->post()) ){
                if( $model->save() ){
                    Yii::$app->session->setFlash('succes', 'Данные приняты');
                    return $this->refresh();
                }else{
                    Yii::$app->session->setFlash('error', 'Проверьте правильность заполнения');
                }
            }

            return $this->render('test', compact('model'));
        }
        public function actionShow(){
            $this->view->title = 'Одна статья';
            $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Ключевики...']);
            $this->view->registerMetaTag(['name' => 'description', 'content' => 'Описание...']);

            
            // $cats = Category::find()->all(); Аналог SQL SELECT * FROM category
            // $cats = Category::find()->orderBy(['id' => SORT_DESC])->all();
            // $cats = Category::find()->asArray()->all();
            // $cats = Category::find()->asArray()->where('parent=691')->all();
            // $cats = Category::find()->asArray()->where(['parent' => 691])->all();
            // $cats = Category::find()->asArray()->where(['like', 'title', 'pp'])->all();
            // $cats = Category::find()->asArray()->where(['<=', 'id', 695])->all();
            // $cats = Category::find()->asArray()->where('parent=691')->limit(2)->all();
            // $cats = Category::find()->asArray()->count();
            // $cats = Category::findOne(['parent' => 691]);
            // $cats = Category::findAll(['parent' => 691]);
            // $query = "SELECT * FROM categories WHERE title LIKE '%pp%'";
            // $cats = Category::findBySql($query)->all();
            // $query = "SELECT * FROM categories WHERE title LIKE :search"; // Более ббезопасный запрос
            // $cats = Category::findBySql($query, ['search' => '%pp%'])->all();

            // $cats = Category::find()->with('products')->where('id=694')->all(); //findOne(694)
            // $cats = Category::find()->all(); // Отложенная загрузка
            // $cats = Category::find()->with('products')->all(); // Жадная загрузка

            return $this->render('show'); //, compact('cats')
        }
    }
?>
