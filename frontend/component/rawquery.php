<?php


namespace frontend\component;


use Yii;
use yii\base\Component;


class rawquery extends Component
{
    public static function insertdata($model, $db)
    {

        $insert = "INSERT INTO `registration`(`name`, `number`, `Email`, `dob`, `images`, `Password`)
        VALUES ('$model->name','$model->number','$model->Email','$model->dob','$model->images','$model->Password')";
        $result  = Yii::$app->$db->createCommand($insert)->queryAll();
    }
    public static function createdirectory()
    {
        $structure = '/opt/lampp/htdocs/shopify/yii-application/csvfolder';
        if (!file_exists($structure)) {
            if (!mkdir($structure, 0777, true)) {
                die('Failed to create folders...');
            }
        } else {
            echo "Already Exists";
        }
    }
}
