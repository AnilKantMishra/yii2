<?php

namespace frontend\models;

use yii\data\ActiveDataProvider;
use Yii;


/**
 * Registration form
 */
class Registration extends \yii\db\ActiveRecord
{

    const EVENT_NEW_USER = 'registration';

    public function init()
    {
        $this->on(Self::EVENT_NEW_USER, [$this, 'Event']);
        $this->on(Self::EVENT_NEW_USER, [$this, 'sendNotification']);
        $this->on(Self::EVENT_NEW_USER, [$this, 'sendRegistration']);
        parent::init();
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Your Name',
            'number' => 'Your Mobile Number',
            'Email' => 'Your Email',
            'dob' => 'Date Of Birth',
            'images' => 'Image Upload',
            'Password' => 'Password',
        ];
    }

    public function Event($event)
    {
        echo "All is well!!!" . "<br>";
    }
    public function sendNotification($event)
    {
        echo "Notification  send" . "<br>";
    }
    public function sendRegistration($event)
    {
        echo "Registration Succesfull" . "<br>";
    }



    public static function tableName()
    {
        return 'registration';
    }

    // public function rules()
    // {
    //     return [
    //         [['name', 'number', 'Password', 'Email', 'dob'], 'required'],
    //         ['name', 'trim'],
    //         ['name', 'string', 'min' => 2, 'max' => 255],
    //         ['number', 'integer'],
    //         ['number', 'match', 'pattern' => '/^([6-9]{1}[0-9]{9})$/'],
    //         ['Email', 'trim'],
    //         ['Email', 'email'],


    //         [['images'], 'file', 'skipOnEmpty' => true],
    //     ];
    // }
}
