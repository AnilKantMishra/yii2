<?php

namespace frontend\models;

use Yii;

use yii\base\Model;
use common\models\User;


class CsvExport extends \yii\db\ActiveRecord
{

    public $csv;

    public function attributeLabels()
    {
        return [
            'csv' => 'Upload Csv File',
        ];
    }


    public function rules()
    {
        return [
            [['csv'], 'file', 'extensions' => 'csv,txt,json'],
        ];
    }
}
