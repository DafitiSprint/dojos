<?php

class Vim
{
    private $version;

    public function __construct($version = "7.4")
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }
}
