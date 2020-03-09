<?php

class DeadFactory
{
    static public function isDead(object $personnage) : void
    {
        if ($personnage->pointsVie <= 0){
            $personnage->mort = true;
        }
    }
}