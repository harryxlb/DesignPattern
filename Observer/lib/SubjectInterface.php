<?php 

namespace Lib;

interface SubjectInterface
{
	public function add(ObserverInterface $observer);

	public function remove(ObserverInterface $observer);

	public function notifyAll();
}