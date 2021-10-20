<?php


namespace core\base\exceptions;


use core\base\controller\BaseMethods;
use Throwable;

class RouteException extends \Exception
{
    use BaseMethods;

    protected $messages;

    public function __construct($message = "", $code = 0)
    {
        parent::__construct($message, $code);

        $this->messages = include 'messages.php';

        $error = $this->getMessage() ? $this->getMessage() : $this->messages($this->getCode());
        $error .= "\r\n". ' file ' . $this->getFile() . "\r\n" . 'In line ' . $this->getLine() . "\r\n";

        if($this->messages[$this->getCode()]) $this->message = $this->messages[$this->getCode()];

        $this->writeLog($error);

    }

}