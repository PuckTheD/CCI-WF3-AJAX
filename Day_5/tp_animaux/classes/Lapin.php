<?php

class Lapin extends Animal
{

    public function type()
    {
        return parent::identifier() . " et je suis un lapin";
    }
}
