<?php


namespace frontend\onlineproductproject\practice\models;

use Yii;
use frontend\onlineproductproject\practice\models\Product;

class Variant extends \yii\db\ActiveRecord
{

    public static function getDb()
    {
        return Yii::$app->db2;
    }

    public static function tableName()
    {

        return 'variant';
    }

    public function rules()
    {
        return [
            [['id', 'product_id', 'variant_id', 'price', 'inventory'], 'required'],
            [['id'], 'integer'],
            [['product_id'], 'integer'],
            [['variant_id'], 'string'],

            [['inventory'], 'integer'],
        ];
    }
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['product_id' => 'product_id']);
    }
}
