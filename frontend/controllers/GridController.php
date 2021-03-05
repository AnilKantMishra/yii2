<?php

namespace frontend\controllers;

use frontend\models\PostSearch;

use Yii;
use yii\web\Controller;


class GridController extends Controller
{
    public function actionShowData()
    {
        $searchModel = new PostSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('show-data', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
