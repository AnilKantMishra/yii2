
<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert; ?>

<?php
$model = Yii::$app->cache->get("customcache");
NavBar::begin([
    'brandLabel' => 'Online Store',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
        'role' => 'navigation',
    ],
]);




$menuItems = [
    ['label' => 'Home', 'url' => ['site/index']],
    ['label' => "$model"],

    ['label' => "Product", 'url' => ['site/index']],


];

echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);

NavBar::end();
