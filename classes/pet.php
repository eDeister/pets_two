<?php
class Pet
{
    private $_animal;
    private $_color;

    function __Construct($animal="Animal", $color="Color")
    {
        $this->_animal = $animal;
        $this->_color = $color;
    }

    public function getAnimal()
    {
        return $this->_animal;
    }

    public function getColor()
    {
        return $this->_color;
    }

}