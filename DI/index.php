<?php 

namespace Lib;

spl_autoload_register(
    function($libFile){
        require dirname(__FILE__) . '/' . $libFile . '.php';
    }
    // ,
    // throw new Exception('class not found'), false
);


use Lib\DI;

$di = new DI();

$di->set('mailer', function(){
    return new Mailer([
        'from' => 'xlb', 
        'to' => 'xsb', 
        'subject' => 'hello', 
        'message' => 'welcome to 2018 ! [QQ Mail]'
        ]);
});

$di->set('sms', function(){
    return new Mailer([
        'from' => 'xlb(13659802319)', 
        'to' => 'xsb(15171716092)', 
        'subject' => 'hello', 
        'message' => 'welcome to 2018 ! [China Mobile]'
        ]);
});

$mailer = $di->get('mailer');
$sms = $di->get('sms');

$di->set('personMailer', function() use ($mailer){
    return new Person($mailer);
});

$di->set('personSms', function() use ($sms) {
    return new Person($sms);
});

$personMailer = $di->get('personMailer');
$personMailer->sendNotification();

echo PHP_EOL;

$personSms = $di->get('personSms');
$personSms->sendNotification();

