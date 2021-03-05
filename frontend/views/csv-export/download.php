<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;



?>


<div class="modal-button-row">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div id="message">
        <?= Yii::$app->session->getFlash('success');
        ?>
    </div>
    <?= $form->field($model, 'csv')->fileInput() ?>

    <?= Html::submitButton('Import', ['class' => 'btn btn-success']) ?><br>
    <br>
    <?= Html::a('EXPORT', ['csv-export/export'], [
        'class' => 'btn btn-danger'
    ])
    ?>

    <?php ActiveForm::end(); ?>
</div>