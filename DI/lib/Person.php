<?php 

namespace Lib;

class Person
{
    private $_notification;

    public function __construct(NotificationAbstract $notification){
        $this->_notification = $notification;
    }

    public function sendNotification()
    {
        $this->_notification->send();
    }

}