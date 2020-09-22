<?php
namespace app\controllers;

Class MyController extends AppController{
    public function actionIndex($id = null){
        $hi = 'Hello, World!';
        $names = ['Ivanov', 'Petrrov', 'Sidorov'];
        // return $this->render('index', ['hello' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }
    public function actionBlogPost(){
        return 'BlogPost'; /*/my/blog-post*/
    }
}