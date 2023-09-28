<?php

class Car {

    private string $nameCar;
    private string $typeCar;
    private float $sizeCar;
    private float $weightCar;
    private string $brandCar;
    private int $countCar;

    public function __construct(
        string $nameCar,
        string $typeCar,
        float $sizeCar,
        float $weightCar,
        string $brandCar,
        int $countCar
    ) {
        $this->nameCar = $nameCar;
        $this->typeCar = $typeCar;
        $this->sizeCar = $sizeCar;
        $this->weightCar = $weightCar;
        $this->brandCar = $brandCar;
        $this->countCar = $countCar;

    }
    public function getNameCar() :string {
        return $this->nameCar;
    }
    public function getTypeCar() :string {
        return $this->typeCar;
    }
    public function getSizeCar() :float  {
        return $this->sizeCar;
    }
    public function getWeighCar() :float {
        return $this->weightCar;
    }
    public function getBrandCar() :string {
        return $this->brandCar;
    }
    public function getCountCar() :int {
        return $this->countCar;
    }
}


?>