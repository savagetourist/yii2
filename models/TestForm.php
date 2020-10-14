<?php
namespace app\models;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord{

    public static function tableName()
    {
        return ('posts');
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст ссобзщеения',
        ];
    }

    public function rules()
    {
        return[
            [ ['name', 'text'], 'required' ], //, 'message' => 'Заполните поле'
            [ 'email', 'trim' ],  // валидация по Email
            // ['name', 'string', 'min' => 2, 'tooShort' => 'короткий' ], // не работает message при мин-макс
            // ['name', 'string', 'max' => 4, 'tooLong' => 'Слишком много букв' ], 
            // [ 'name', 'string', 'length' => [2,5] ],
            // [ 'name', 'myRule' ],
            // [ 'text', 'safe' ]// [ 'text', 'trim' ]
        ];
    }


    // public function myRule($attr){
    //     if ( !in_array($this->$attr, ['hello', 'world']) ){
    //         $this->addError($attr, 'Либо Hello, либо World');
    //     }
    // }
}
?>