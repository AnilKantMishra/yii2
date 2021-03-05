<?php

namespace frontend\widgets;

use frontend\models\Registration;
use yii\base\Widget;
use yii;
use yii\helpers\Html;

class Todaywidget extends Widget
{
    public $message;
    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = "Hello World";
        }
    }

    public  function run()
    {
        $model = new Registration();
        return Yii::$app->view->render('@app/views/first/registration-form', ['model' => $model]);
    }
}
