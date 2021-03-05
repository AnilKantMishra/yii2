<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Show Data';
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?= Html::encode($this->title) ?></h1>

<div class="row mt-2">
    <div class="col-lg-12">

        <div id="message">
            <?= Yii::$app->session->getFlash('success');
            ?>
        </div>
        <?php


        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn',
                ],

                'id',
                'name',
                'Email',
                'number'



            ]
        ]);
        // var_dump($dataProvider);
        ?>

    </div>

</div>