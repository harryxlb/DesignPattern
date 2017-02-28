<?php 

namespace Lib;

class Mailer extends NotificationAbstract
{
    public function __construct(array $sendOption){
        $this->_sendOptions = $sendOption;
    }

    public function send()
    {
        echo 'sending...' . PHP_EOL;

        foreach ($this->_sendOptions as $key => $option) {
            echo $key . ': ' . $option . PHP_EOL;
        }

        echo 'send success !' . PHP_EOL;
    }
}