<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['action' => 'index', 'method' => 'queryparams']);
        ?>
        <?= $form->field($model, 'from') ?>

        <?= $form->field($model, 'to') ?>

        <?php ActiveForm::end(); ?>



    </div>
</div>

<?php
