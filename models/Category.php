<?php
namespace app\models;

use yii\db\ActiveRecord;

class category extends ActiveRecord{
    public static function tableName()
    {
        return 'categories';
    }

    public function getProducts() //приставка GET обязательна
    {
        return $this->hasMany(Product::className(), ['parent' => 'id']); // Связь двух таблиц
    }

}
?>