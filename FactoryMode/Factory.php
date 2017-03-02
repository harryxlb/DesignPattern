<?php 
/**
 * 工厂模式
 */

use Lib\Car;
use Lib\Tv;

class Factory
{
	public static function doSale($product)
	{
		$product->sale();
	}

	public static function saleCar()
	{
		return (new Car())->sale();
	}

	public static function createTv()
	{
		return new Tv();
	}

}

spl_autoload_register(function($classFile){
	echo 'class file: ' . $classFile . PHP_EOL;
	require dirname((__FILE__)) . '/' . $classFile . '.php';
});

Factory::doSale(new Car());
Factory::doSale(new Tv());

Factory::saleCar();

$tv = Factory::createTv();
$tv->sale();

