<?php 

namespace Lib;

class Subject implements SubjectInterface
{
	protected $_observers = [];

	public function add(ObserverInterface $observer)
	{
		$this->_observers[] = $observer;
	}

	public function remove(ObserverInterface $observer)
	{
		if ($index = array_search($observer, $this->_observers)) {
			unset($this->_observers[$index]);
		}
	}

	public function notifyAll()
	{
		foreach ($this->_observers as $observer) {
			$observer->update();
		}
	}
}