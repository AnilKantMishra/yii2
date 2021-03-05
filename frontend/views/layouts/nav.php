
<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert; ?>

<?php
NavBar::begin([
    'brandLabel' => 'Hi Main2',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
        'role' => 'navigation',
    ],
]);
echo "<form class='navbar-form navbar-right' role='search'>
            <div class='form-group has-feedback'>
                <input id='searchbox' type='text' placeholder='Search' class='form-control'>
                <span id='searchicon' class='fa fa-search form-control-feedback'></span>
            </div>
                </form>";
$menuItems = [
    ['label' => 'Home', 'url' => ['site/index']],
    ['label' => 'Custom Test', 'url' => ['site/about']],
];

echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);

NavBar::end();
