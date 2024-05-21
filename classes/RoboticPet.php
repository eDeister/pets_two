<?php

class RoboticPet extends Pet
{
    private $_accessories;


    function __construct($animal="Animal", $color="Color", $accessories=array('Accessories'))
    {
        parent:: __construct($animal,$color);
        $this->_accessories = $accessories;

    }

    function setAccessories($accessories)
    {
        $this->_accessories = $accessories;
    }

    function getAccessories()
    {
        return $this->_accessories;
    }
}