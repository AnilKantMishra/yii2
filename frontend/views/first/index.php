<?php

// include '../../../console/component/Checktable.php';



use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
use frontend\widgets\NewWidget;

$this->title = 'Main';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Let's Go!</h1>
        <div id="message">
            <?= Yii::$app->session->getFlash('success');
            ?>
        </div>
        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <?= NewWidget::widget(); ?>
    </div>

</div>
</div>