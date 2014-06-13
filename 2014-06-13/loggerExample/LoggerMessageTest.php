<?php
include_once "Logger.php";
include_once "EmailLogger.php";
include_once "StdOutLogger.php";
include_once "StdErrLogger.php";

class LoggerMessageTest extends PHPUnit_Framework_TestCase
{
    /** @var Logger */
    private $logger;

    protected function setUp()
    {
        parent::setUp();

        Logger::$messages = array();
        $this->logger = new StdOutLogger(Logger::DEBUG);

        $logger1 = new EmailLogger(Logger::NOTICE);
        $this->logger->setNext($logger1);

        $logger2 = new StdErrLogger(Logger::ERR);
        $logger1->setNext($logger2);
    }

    public function testDebugOutput()
    {
        $message = $this->logger->message("Debug", Logger::DEBUG);
        $expected = array("StdOut Message: Debug");

        $this->assertEquals($expected, $message);
    }

    public function testNoticeOutput()
    {
        $message = $this->logger->message("Notice", Logger::NOTICE);
        $expected = array(
            "StdOut Message: Notice",
            "Email Message: Notice"
        );

        $this->assertEquals($expected, $message);
    }

    public function testErrorOutput()
    {
        $message = $this->logger->message("Error", Logger::ERR);
        $expected = array(
            "StdOut Message: Error",
            "Email Message: Error",
            "StdErr Message: Error"
        );

        $this->assertEquals($expected, $message);
    }
}