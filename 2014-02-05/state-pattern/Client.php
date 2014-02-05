<?php
spl_autoload_register(function($className){
    include_once $className . ".php";
});

class Client
{
    public function main()
    {
        $piece = new Piece(new StateOne()); //Starts on One
        $piece->moveDown(); //Goes to Three
        $piece->moveRight(); //Goes to Four
        $piece->moveUp(); //Goes to Two
        $piece->moveLeft(); //Goes to One
        $piece->moveLeft(); //Error
        $piece->moveLeft(); //Error
        $piece->moveUp(); //Error
        $piece->moveRight(); //Goes to Two
        $piece->moveUp(); //Error
    }
}

$client = new Client();
$client->main();