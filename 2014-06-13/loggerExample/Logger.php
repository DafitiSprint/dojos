<?php

abstract class Logger
{
    const ERR = 1;
    const NOTICE = 2;
    const DEBUG = 3;

    protected $mask;

    /** @var Logger */
    protected $next;

    /** @var array */
    public static $messages = array();

    /**
     * @param int $mask
     */
    function __construct($mask)
    {
        $this->mask = $mask;
    }

    /**
     * @param Logger $log
     */
    public function setNext(Logger $log)
    {
        $this->next = $log;
    }

    /**
     * @param string $msg
     * @param int $priority
     * @return array
     */
    public function message($msg, $priority)
    {
        if ($priority <= $this->mask) {
            self::$messages[] = $this->writeMessage($msg);
        }

        if ($this->next != null) {
            $this->next->message($msg, $priority);
        }

        return self::$messages;
    }

    abstract function writeMessage($msg);
}