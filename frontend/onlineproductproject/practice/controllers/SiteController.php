<?php

namespace frontend\onlineproductproject\practice\controllers;

use yii\web\Controller;
use frontend\onlineproductproject\practice\models\Variant;
use yii;
use yii\data\SqlDataProvider;
use frontend\onlineproductproject\practice\models\PostSearch;

class SiteController extends Controller
{
	public function actionIndex()
	{
		$this->layout = 'main2';
		$searchModel = new PostSearch();

		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		$dataProvider->pagination->pageSize = 5;

		if (Yii::$app->cache->get("customcache") == "") {
			$model = variant::find()->count();
			Yii::$app->cache->set('customcache', $model);
		}
		// $count = Yii::$app->db2->createCommand('
		// SELECT COUNT(*) FROM  product product RIGHT JOIN variant variant on product.id = variant.product_id')->queryScalar();
		// $dataProvider = new SqlDataProvider([
		// 	'db' => 'db2',
		// 	'sql' => 'SELECT * from product product RIGHT JOIN variant variant on product.id = variant.product_id',

		// 	'totalCount' => $count,
		// 	'sort' => [
		// 		'attributes' => [
		// 			'title',
		// 			'variant_id',
		// 			'price',
		// 			'inventory',

		// 		],
		// 	],
		// 	'pagination' => [
		// 		'pageSize' => 5,
		// 	],
		// ]);


		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,

		]);
	}

	public function actionDelete($id)
	{

		$model = variant::findOne($id)->delete();
		Yii::$app->session->setFlash("success", "Record deleted Successfully.");
		return $this->redirect(['index']);
	}

	public function actionUpdate($id)
	{
		$model = Variant::findOne($id);

		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			$model->save();

			Yii::$app->session->setFlash("success", "Record Updated Successfully.");

			return $this->redirect('index');
		}
		return $this->render('post-search', ['model' => $model]);
	}

	public function actionBulk()
	{
		$selection = (array)Yii::$app->request->post('selection');
		$filename = "onlineshop.csv";
		header("Content-type: text/csv");
		header("Content-Disposition: attachment; filename = $filename");
		if (Yii::$app->request->post('selection_all')) {
			$model = Yii::$app->db2->createCommand("SELECT b.product_id,title,inventory,price,variant_id
			FROM product as a 
			INNER JOIN variant as b ON a.id = b.product_id ")->queryAll();

			$filepath = fopen("php://output", 'w');

			$header = array_keys($model[0]);
			fputcsv($filepath, $header);
			foreach ($model as $v) {
				fputcsv($filepath, $v);
			}
		} else {
			$filepath = fopen("php://output", 'w');
			$header = array('product_id', 'title', 'inventory', 'price', 'variant_id');
			fputcsv($filepath, $header);
			foreach ($selection as $id) {

				$model = Yii::$app->db2->createCommand("SELECT b.product_id,title,inventory,price,variant_id
			FROM product as a 
			INNER JOIN variant as b ON a.id = b.product_id where b.id = $id")->queryAll();

				// print_r($model);
				foreach ($model as $v) {
					fputcsv($filepath, $v);
				}
			}
		}
	}


	public function actionRefresh()
	{
		$model = variant::find()->count();
		Yii::$app->cache->set('customcache', $model);
		return $this->redirect(['index']);
	}
}
