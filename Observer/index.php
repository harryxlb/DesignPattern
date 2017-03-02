<?php 
/**
 * 观察者模式
 */

require './autoload.php';

use Lib\Subject;
use Lib\ObserverA;
use Lib\ObserverB;

$subject = new Subject();
$subject->add(new ObserverA);
$subject->add($obb = new ObserverB);
$subject->remove($obb);
$subject->notifyAll();