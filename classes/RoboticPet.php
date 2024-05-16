<?php

class RoboticPet extends Pet
{
    private $_accessories;


    function __Construct($animal="", $color="", $accessories="")
    {
        parent:: __construct($animal,$color);
        $this->_accessories = $accessories;

    }
}