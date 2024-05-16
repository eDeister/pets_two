<?php
class StuffedPet extends Pet
{
    private $_size;
    private $_stuffingType;
    private $_material;

    function __construct($animal="", $color="", $size="",$stuffingType="",$material="")
    {
        parent:: __construct($animal,$color);
        $this->_size = $size;
        $this->_stuffingType = $stuffingType;
        $this->_material = $material;
    }
}