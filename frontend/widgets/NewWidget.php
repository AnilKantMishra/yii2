<?php

namespace frontend\widgets;

use yii\base\Widget;

use yii\helpers\Html;

class NewWidget extends Widget
{
    public $message;
    public $label1;
    public $label2;


    public function init()
    {
        parent::init();
        if ($this->label1 === null) {
            $this->label1 = 'First name';
        }
        if ($this->label2 === null) {
            $this->label2 = 'Last Name';
        }
        // if ($this->label === null) {
        //     $this->label = 'Last name';
        // }
    }


    public function run()
    {
        $html =
            "
        <form>
        <label1 for='fname'>$this->label1</label><br>
        <input type='text' id='fname' name='fname' value='John'><br>
        <label2 for='lname'>$this->label2</label><br>
        <input type='text' id='lname' name='lname' value='Doe'><br><br>
        </form> 
        <input type='button' onclick='myfun()' value='Submit'><br>
        <br>
        <label>Your First Name is: </label>
        <p><span id='display'></span></p>  
        <label>Your Last Name is: </label>
        <p><span id='display2'></span></p>  
        ";
        return $html;
    }
}
