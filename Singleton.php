<?php 
/**
 * 单例模式
 */

class Singleton
{
	private static $_instance = null;

	public $count = 0;

	private function __construct()
	{
		// echo '( private constructor not allow construct from outside :)' . PHP_EOL;
	}

	public static function getInstance()
	{
		if (self::$_instance == null){
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function showCount()
	{
		echo 'count: ' . $this->count . PHP_EOL;
	}

	private function __clone()
	{
		throw new Exception('Forbidden to clone object!');
		// trigger_error('Forbidden to clone object!', E_USER_ERROR);
	}

	public function __toString()
	{
		return __CLASS__ . PHP_EOL;
	}
}

// $singleObj1 = new Singleton();

$singleObj2 = Singleton::getInstance();
$singleObj3 = Singleton::getInstance();

$singleObj2->showCount();
$singleObj2->count += 10;
$singleObj2->showCount();

$singleObj3->showCount();

$singleObj4 = clone $singleObj2;
$singleObj4->showCount();
echo $singleObj4;
