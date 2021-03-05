<?php

namespace frontend\onlineproductproject\practice\models;

use yii\data\ActiveDataProvider;

class PostSearch extends Variant
{
    public $id;
    public $product_id;
    public $title;
    public $variant_id;
    public $price;
    public $inventory;
    public $from;
    public $to;

    public function rules()
    {
        return [
            [['title'], 'string'],
            [['variant_id'], 'integer'],
            [['from'], 'trim'],
            [['to'], 'trim'],

            [['inventory'], 'integer'],
            [['price', 'title', 'inventory'], 'safe'],
            // [['product_id', 'title', 'variant_id', 'price', 'inventory'], 'required'],
        ];
    }

    public function search($params)
    {
        $query = Variant::find();
        $query->joinWith('product');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,

        ]);

        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }
        $query->andFilterWhere(['=', 'title', $this->title])
            ->andFilterWhere(['like', 'variant_id', $this->variant_id])
            ->andFilterWhere(['between', 'price', $this->from, $this->to])
            ->andFilterWhere(['like', 'inventory', $this->inventory]);

        return $dataProvider;
    }

    // public function search($params)
    // {
    //     $query = Variant::find()->select(['v.product_id', 'v.variant_id', 'max', 'min']);
    //     $query->from(['variant v']);

    //     $query->leftJoin('(select `product_id`,price,max(price) as max,min(price) as min from variant group by product_id ) as a where v.product_id = a.product_id');
    //     // $count = Yii::$app->db2->createCommand('
    //     // select max,min from variant as v join (select `product_id`,price,max(price) as max,min(price) as min from variant group by product_id ) a where v.product_id = a.product_id')->queryScalar();

    //     $dataProvider = new ActiveDataProvider([
    //         'query' => $query,
    //         // 'sql' => $count


    //     ]);


    //     $this->load($params);
    //     if (!$this->validate()) {
    //         return $dataProvider;
    //     }
    //     $query->andFilterWhere(['=', 'title', $this->title])
    //         ->andFilterWhere(['like', 'variant_id', $this->variant_id])
    //         ->andFilterWhere(['like', 'price', $this->price])
    //         ->andFilterWhere(['like', 'inventory', $this->inventory]);

    //     return $dataProvider;
    // }
}
