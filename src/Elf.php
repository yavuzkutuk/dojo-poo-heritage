<?php

namespace Unit;

require_once 'Unit.php';


class Elf extends Unit
{
    protected $speed = 5;

    public function attack()
    {
        echo "À l'attaque !";
    }
}