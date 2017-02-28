<?php 

namespace Lib;

interface DIInterface
{
    public function set($serviceName, $callback);

    public function get($serviceName);
}