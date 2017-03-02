<?php 

namespace Lib;

class ObserverA implements ObserverInterface
{
	public function update()
	{
		echo 'ObserverA update...' . PHP_EOL;
	}
}