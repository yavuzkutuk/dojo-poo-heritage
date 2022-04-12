<?php

namespace Unit;

require_once 'Unit.php';


class Soldier extends Unit
{
    protected $speed = 2;

    public function attack()
    {
        echo "À l'attaque !";
    }
}