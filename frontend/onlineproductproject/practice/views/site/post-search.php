<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

?>
<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($model, 'product_id', ['inputOptions' => ['autofocus', 'class' => 'form-control transparent']])->textInput()->input('product_id', ['placeholder' => "Enter Your Product Id"]) ?>

        <?= $form->field($model, 'variant_id', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']])->textInput()->input('variants_id', ['placeholder' => "Enter Your Variant Id"]) ?>
        <?= $form->field($model, 'variant_id', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']])->textInput()->input('variants_id', ['placeholder' => "Enter Your Variant Id"]) ?>
        <?= $form->field($model, 'price', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']])->textInput()->input('price', ['placeholder' => "Enter Your Price"]) ?>

        <?= $form->field($model, 'inventory', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']])->textInput()->input('inventory', ['placeholder' => "Enter Your Inventory"]) ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>



    </div>
</div>

<?php







/*	$query = "SELECT *
		FROM product,variants
		WHERE product.product_id=variant.product_id";
		$sql = "select * from variant as v join (select `product_id`,price,max(price) as p,min(price) as m from variants group by product_id ) a where v.product_id = a.product_id";



		$command = Yii::$app->db2->createCommand($query)->queryAll();
		$res = Yii::$app->db2->createCommand($sql)->queryAll();








?>