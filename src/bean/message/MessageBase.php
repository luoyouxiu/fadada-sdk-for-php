<?php

namespace Lyx\FadadaSdkForPhp\Bean\message;
class MessageBase
{
    public $eventTime;

    /**
     * @return mixed
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * @param mixed $eventTime
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime = $eventTime;
    }

}