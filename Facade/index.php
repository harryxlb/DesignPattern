<?php 
/**
 * 门面模式，又叫外观模式
 */

require './autoload.php';

$facade = new Facade();
$facade->wrapperA();
$facade->wrapperB();
$facade->wrapperC();