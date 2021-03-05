<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\widgets\NewWidget;

$this->title = 'Question Answer';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <button>
        <?= NewWidget::widget(['message' => ' Lets Go']); ?>
</div>