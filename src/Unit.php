<?php

namespace Unit;

class Unit
{
    protected $pv;
    protected $position = [0, 0]; // [x, y]
    protected $speed = 1;

    public function __toString()
    {
        return 'La position actuelle est : ' . $this->position[0] . ', ' . $this->position[1];
    }

    public function walk(string $direction)
    {
       
        if ($direction == 'right') {
            $this->position[0]+= $this->speed;
        } elseif ($direction == 'top') {
            $this->position[1]+= $this->speed;
        } elseif ($direction == 'left') {
            $this->position[0]-= $this->speed;
        } elseif ($direction == 'bottom') {
            $this->position[1]-= $this->speed;
        }
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of position
     */ 
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */ 
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
}