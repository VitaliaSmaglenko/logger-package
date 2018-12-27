<?php
/**
 * Created by PhpStorm.
 * User: Виталия
 * Date: 24.12.2018
 * Time: 22:18
 */

namespace Logger;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Log
{
    private $logger;
    private $path ='src/errors.log';
    public function __construct($name)
    {
        $this->logger = new Logger($name);
        if(!file_exists($this->path)){
            $file = fopen($this->path, 'w');
            fclose($file);
        }
        $this->logger->pushHandler(new StreamHandler($this->path, Logger::WARNING));

    }


    public function emergency($message, array $context = array())
    {
        $this->logger->emergency($message);
    }

    public function alert($message, array $context = array())
    {
        $this->logger->alert($message);
    }

    public function critical($message, array $context = array())
    {
        $this->logger->critical($message);
    }


    public function error($message, array $context = array())
    {
        $this->logger->error($message);
    }

    public function warning($message, array $context = array())
    {
        $this->logger->warning($message);
    }

    public function notice($message, array $context = array())
    {
        $this->logger->notice($message);
    }

    public function info($message, array $context = array())
    {
        $this->logger->info($message);
    }


    public function debug($message, array $context = array())
    {
        $this->logger->debug($message);
    }

    public function log($level, $message, array $context = array())
    {
        $this->logger->log($level,$message);
    }

}
