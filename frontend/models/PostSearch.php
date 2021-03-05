<?php

namespace frontend\models;

use frontend\models\Registration;
use yii\data\ActiveDataProvider;

class PostSearch extends Registration
{

    public function rules()
    {

        return [
            [['id'], 'integer'],
            [['name'], 'string'],
            [['number'], 'integer'],
            [['Email'], 'string'],

        ];
    }
    public function search($params)
    {
        $query = Registration::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {

            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['=', 'name', $this->name])
            ->andFilterWhere(['like', 'number', $this->number])
            ->andFilterWhere(['like', 'Email', $this->Email]);


        return $dataProvider;
    }
}
