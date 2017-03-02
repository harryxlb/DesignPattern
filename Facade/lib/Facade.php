<?php 

class Facade
{
	private $_subSystemOne;

	private $_subSystemTwo;

	private $_subSystemThree;
	
	function __construct()
	{
		$this->_subSystemOne = new SubSystemOne();
		$this->_subSystemTwo = new SubSystemTwo();
		$this->_subSystemThree = new SubSystemThree();
	}

	public function wrapperA()
	{
		$this->_subSystemOne->methodOne();
		$this->_subSystemTwo->methodTwo();
	}

	public function wrapperB()
	{
		$this->_subSystemTwo->methodTwo();
		$this->_subSystemThree->methodThree();
	}

	public function wrapperC()
	{
		$this->_subSystemOne->methodOne();
		$this->_subSystemTwo->methodTwo();
		$this->_subSystemThree->methodThree();
	}
}