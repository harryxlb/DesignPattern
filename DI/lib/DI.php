<?php 

namespace Lib;

class DI implements DIInterface
{
    private $_service;

    public function set($serviceName, $callback)
    {
        $this->_service[$serviceName] = $callback;
    }

    public function get($serviceName)
    {
        $instance = null;

        if (is_object($this->_service[$serviceName])){
            $instance = call_user_func($this->_service[$serviceName], null);
        } else {
            throw new \Exception("Service is invalid, it must be a Object.");
        }

        return $instance;
    }

}