<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\widgets\NewWidget;

$var = '$("document").ready(
    function(){
    alert(" I am register JS");
    }
    )';

$this->registerJS($var);

$this->registerCss('body{
    background-color: lightblue;
}');

$this->registerJsFile("@web/js/custom.js");
// $this->registerCssFile("@web/css/custom.css");

$this->title = 'Test ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">


    <?= Yii::getAlias('@custom') . "<br>";
    // (Yii::setAlias('', '@webroot'))


    ?>


    <?= NewWidget::widget(['label1' => 'Dynamic First Name', 'label2' => 'Dynamic Last name']); ?>

</div>