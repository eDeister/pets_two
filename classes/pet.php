<?php
class Pet
{
    private $_animal;
    private $_color;

    function __Construct($animal="", $color="")
    {
        $this->_animal = $animal;
        $this->_color = $color;
    }
}