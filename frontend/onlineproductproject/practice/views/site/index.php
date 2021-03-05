<?php
$this->registerJsFile("@web/js/custom.js", [
    'depends' => [
        \yii\web\JqueryAsset::className()
    ]
]);

$this->registerJs("
var modal,that,name,id; 
    $(function() {  
        $('.popup-modal').click(function(e) {
            e.preventDefault();
            modal = $('#firstmodal').modal('show');       
            that = $(this);           
             id = that.data('id');            
            $('#first-delete').click(function(e) {
            e.preventDefault();      
            modal = $('#secondmodal').modal('show');
            $('#second-delete').click(function(e) {
                e.preventDefault();     
                $('#second-delete').prop('disabled',true);
                userInput = $('#demo').val();
            
            if(userInput=='yes'){
           
                window.location.href = 'delete?id='+id;  

              
             }
                else{
                alert('Wrong number');
               
                }
            });
            });
        });
    });")

?>
<?php

use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use frontend\onlineproductproject\practice\models\PostSearch;

$this->title = 'Show Data';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-lg-12">

    <div id="message">
        <?= Yii::$app->session->getFlash('success');
        ?>
    </div>



    <?= Html::beginForm(['site/bulk'], 'post'); ?>
    <?= Html::submitButton('Export', ['class' => 'btn btn-info', 'id' => 'exportbutton']); ?>
    <?= Html::a('REFRESH', ['site/refresh'], [
        'class' => 'btn btn-primary'
    ]) ?>
    <?= GridView::widget([
        'id' => 'grid',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\CheckboxColumn',
            ],
            'product_id',
            [
                'attribute' => 'title',
                'value' => 'product.title'
            ],
            'variant_id',
            [
                'attribute' => 'price',
                'filter' => $this->render('form', ['model' => $searchModel]),
                'value' => function ($model) {
                    $maxprice = PostSearch::find()->where(['product_id' => $model->product_id])->max('price');
                    $minprice = PostSearch::find()->where(['product_id' => $model->product_id])->min('price');
                    return $minprice . "-" . $maxprice;
                }
            ],
            'inventory',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<div class="pull-left">{update}{delete}</div>',
                'header' => 'Action',
                'buttons' => [

                    'delete' => function ($url, $model) {
                        return Html::a('', $url, [
                            'class'       => 'btn btn-danger btn-xs glyphicon glyphicon-trash popup-modal',
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'id'          => 'popupModal',
                            'data-id' => $model->id

                        ]);
                    },
                ],
                'urlCreator' => function ($action, $model) {
                    if ($action === 'update') {
                        $url = Url::toRoute(['site/update', 'id' => $model->id]);
                        return $url;
                    }
                    if ($action == 'delete') {
                        $url = Url::toRoute(['site/delete', 'id' => $model->id]);
                        // $url =  Yii::$app->cache->set('url', $url);
                        return $url;
                    }
                }
            ],
        ],
    ]); ?>
    <? Html::endForm(); ?>
    <?php $url = Url::to(['site/delete']); ?>

    <?php Modal::begin([
        'header' => '<h2 class="modal-title"> </h2>',
        'id'     => 'firstmodal',
        'size' => 'modal-lg',

        'footer' => Html::a('Delete', '', ['class' => 'btn btn-danger', 'id' => 'first-delete']),
    ]); ?>

    <?= 'You may Loose Your Record';  ?>
    <?php Modal::end(); ?>

    <?php Modal::begin([
        'header' => '<h2 class="modal-title"> Type Yes for delete</h2>',
        'id'     => 'secondmodal',

        'size' => 'modal-sm',
        'footer' => Html::a('Confirm',  $url, ['class' => 'btn btn-danger', 'id' => 'second-delete']),

    ]); ?>

    <input type="text" id="demo" placeholder="enter yes to delete">
    <?php Modal::end(); ?>
</div>