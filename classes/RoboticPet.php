<?php

class RoboticPet extends Pet
{
    private $_accessories;


    function __construct($animal="", $color="", $accessories="")
    {
        parent:: __construct($animal,$color);
        $this->_accessories = $accessories;

    }

    function setAccessories($accessories)
    {
        $this->_accessories = $accessories;
    }
}