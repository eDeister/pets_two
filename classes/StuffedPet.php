<?php
class StuffedPet extends Pet
{
    private $_size;
    private $_stuffingType;
    private $_material;

    function __construct($animal="Animal", $color="Color", $size="Size",$stuffingType="Stuffing",$material="Material")
    {
        parent:: __construct($animal,$color);
        $this->_size = $size;
        $this->_stuffingType = $stuffingType;
        $this->_material = $material;
    }

    function setSize($size)
    {
        $this->_size = $size;
    }

    function setMaterial($material)
    {
        $this->_material = $material;
    }

    public function getSize()
    {
        return $this->_size;
    }

    public function getStuffingType()
    {
        return $this->_stuffingType;
    }

    public function getMaterial()
    {
        return $this->_material;
    }


}