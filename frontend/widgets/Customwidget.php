<?php


namespace frontend\widgets;

use frontend\models\Registration;

use yii\base\Widget;
use yii;

class Customwidget extends Widget
{
    public $message;
    public $pagetype;

    // public function run()
    // {
    //     return $this->message;
    // }

    public function run()
    {
        $model = registration::find()->all();

        $html = $this->pagetype;
        return Yii::$app->view->render('@app/views/first/show-data', ['model' => $model]);
    }
}
