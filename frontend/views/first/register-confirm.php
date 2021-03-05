<?php

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->Email) ?></li>
    <li><label>Password</label>: <?= Html::encode($model->Password) ?></li>
    <li><label>Mobile Number</label>: <?= Html::encode($model->number) ?></li>
    <li><label>Date</label>: <?= Html::encode($model->dob) ?></li>
    <li><label>Date</label>: <?= Html::encode($model->images) ?></li>


</ul>