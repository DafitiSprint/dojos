<?php

class StdOutLogger extends Logger
{
    function writeMessage($msg)
    {
        return "StdOut Message: " . $msg;
    }
} 
