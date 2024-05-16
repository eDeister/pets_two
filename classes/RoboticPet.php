<?php

class RoboticPet extends Pet
{
    private $_accessories;


    function __Construct($accessories="")
    {
        $this->_accessories = $accessories;

    }
}