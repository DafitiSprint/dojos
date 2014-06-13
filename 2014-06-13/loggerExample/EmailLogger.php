<?php

class EmailLogger extends Logger
{
    function writeMessage($msg)
    {
        return "Email Message: " . $msg;
    }
} 