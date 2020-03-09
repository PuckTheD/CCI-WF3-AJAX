<?php

class Chat extends Animal
{

    public function type()
    {
        return parent::identifier() . " et je suis un chat";
    }
    public function crier()
    {
        return "Miaou Miaou !";
    }
}