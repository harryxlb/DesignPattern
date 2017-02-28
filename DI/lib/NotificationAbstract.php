<?php 

namespace Lib;

abstract class NotificationAbstract
{
    private $_sendOptions = array();

    public abstract function send();
}