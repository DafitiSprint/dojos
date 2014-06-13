<?php

class StdErrLogger extends Logger
{
    function writeMessage($msg)
    {
        return "StdErr Message: " . $msg;
    }

}