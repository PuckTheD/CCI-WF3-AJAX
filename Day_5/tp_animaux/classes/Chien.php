<?php

class Chien extends Animal
{

    public function type()
    {
        return parent::identifier() . " et je suis un chien";
    }
}