<?php

/* @var $this yii\web\View */


use yii\helpers\Html;

$this->title = 'Test Page';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the test</p>

    <code><?= realpath(dirname(__FILE__)) ?></code>

</div>