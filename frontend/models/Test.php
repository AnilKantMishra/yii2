<?php

namespace frontend\models;

use yii\data\ActiveDataProvider;
use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Registration form
 */
class Test extends \yii\db\ActiveRecord
{

    // public static function getDb()
    // {
    //     return Yii::$app->db2;
    // }


    public static function tableName()
    {
        return 'test';
    }

    public function rules()
    {
        return [
            // [['name', 'number', 'Password', 'Email', 'dob'], 'required'],
            ['name', 'trim'],
            ['name', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'email'],

            ['age', 'string'],
        ];
    }
}
