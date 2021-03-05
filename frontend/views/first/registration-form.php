<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

?>
<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <?= $form->field($model, 'name', ['inputOptions' => ['autofocus', 'class' => 'form-control transparent']])->textInput()->input('username', ['placeholder' => "Enter Your Name Here"]) ?>
        <?= $form->field($model, 'number', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']])->textInput()->input('mobilenumber', ['placeholder' => "Enter Your mobile number"]) ?>

        <?= $form->field($model, 'Email', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']])->textInput()->input('email', ['placeholder' => "Enter Your Email"]) ?>
        <?= $form->field($model, 'dob')->widget(DatePicker::className())->input('dob', ['placeholder' => "date-month-year"]) ?>


        <?= $form->field($model, 'images')->fileInput() ?>
        <? if(!isset($model->id)){
            echo $form->field($model, 'Password')->passwordInput() ;
        }
        else{
       }
        ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>