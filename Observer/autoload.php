<?php 

spl_autoload_register(function($libFile){
	// echo 'class file: ' . $libFile . PHP_EOL;
	require dirname(__FILE__) . '/' . $libFile . '.php';
});