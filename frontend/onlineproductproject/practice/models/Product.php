<?php


namespace frontend\onlineproductproject\practice\models;


use yii;

class Product extends \yii\db\ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->db2;
    }
    public static function tableName()
    {
        return 'product';
    }

    public function rules()
    {
        return [
            [['id', 'product_id', 'title', 'created_at'], 'required'],
            [['id'], 'integer'],
            [['product_id'], 'integer'],
            [['title'], 'string'],
            [['created_at'], 'date'],
        ];
    }
}
