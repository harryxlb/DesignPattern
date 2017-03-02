<?php 

namespace Lib;

class ObserverB implements ObserverInterface
{
	public function update()
	{
		echo 'ObserverB update...' . PHP_EOL;
	}
}