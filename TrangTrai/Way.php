<?php

class Way {

    private string $nameWay;
    private string $typeWay;
    private float $locationWay;
    private float $lengthWay;
    private float $widthWay;
    

    public function __contructs(string $nameWay, string $typeWay, float $locationWay, float $lengthWay, float $widthWay) {
        $this->nameWay = $nameWay;
        $this->typeWay = $typeWay;
        $this->locationWay = $locationWay;
        $this->lengthWay = $lengthWay;
        $this->widthWay = $widthWay;

    }
    public function getNameWay() :string {
        return $this->nameWay;
    }
    public function getTypeWay() :string {
        return $this->typeWay;
    }
    public function getLocationWay() :float  {
        return $this->locationWay;
    }
    public function getLengthWay() :float {
        return $this->lengthWay;
    }
    public function getWidthWay() :float {
        return $this->widthWay;
    }

}


?>