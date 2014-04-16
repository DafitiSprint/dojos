<?php
require 'Hangman.php';

class HangmanTest extends PHPUnit_Framework_TestCase
{

    public function testGuessOneRightLetter()
    {
        $hangman = new Hangman('dafiti');
        $result = $hangman->guessLetter('a');
        $this->assertTrue($result);
    }

    public function testGuessOneWrongLetter()
    {
        $hangman = new Hangman('dafiti');
        $result = $hangman->guessLetter('s');
        $this->assertFalse($result);
    }

    public function testGuessOneRightLetterOnFirstPosition()
    {
        $hangman = new Hangman('dafiti');
        $result = $hangman->guessLetter('d');
        $this->assertTrue($result);
    }

    public function testGuessOneShouldMarkErrorWhenLetterDoesNotExist()
    {
        $hangman = new Hangman('dafiti');
        $hangman->guessLetter('z');

        $this->assertEquals(1, $hangman->getErrors());
    }

    public function testGuessOneShouldMarkTwoErrosWhenTwoLettersDoesNotExists()
    {
        $hangman = new Hangman('dafiti');
        $hangman->guessLetter('z');
        $hangman->guessLetter('w');

        $this->assertEquals(2, $hangman->getErrors());
    }
    
    /**
     * @expectedException Exception
     *
     */
    public function testShouldRaiseExceptionWhenMaxError()
    {
        $hangman = new Hangman('dafiti');
        $hangman->guessLetter('z');
        $hangman->guessLetter('w');       
        $hangman->guessLetter('y');       
        $hangman->guessLetter('b');       
        $hangman->guessLetter('u');       
        $hangman->guessLetter('m');
    }

    public function testGuessShouldReturnWonStatusWhenWordIsComplete()
    {
        $hangman = new Hangman('dafiti');
        $hangman->guessLetter('d');
        $hangman->guessLetter('a');       
        $hangman->guessLetter('f');       
        $hangman->guessLetter('i');       
        $hangman->guessLetter('t');       
              
        $this->assertEquals(Hangman::WON, $hangman->getStatus());
    }


}
