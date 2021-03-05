<?php

namespace frontend\component;

use yii\base\Component;
use yii\base\Event;

class CustomEvent extends Component
{
    const EVENT_CUSTOM = 'custom-event';

    public function customget()
    {
        $this->on(CustomEvent::EVENT_CUSTOM, [$this, 'customname']); //object
        $this->trigger(self::EVENT_CUSTOM);

        $this->off(CustomEvent::EVENT_CUSTOM, [$this, 'customname']); //object
    }
    public function customname()
    {
        echo "This Is Custom Event" . "<br>";
    }
}
