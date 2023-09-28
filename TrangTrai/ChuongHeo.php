<?php

class ChuongHeo extends Chuong {
    private string $namePig;
    private string $typePig;
    private float $sizePig;
    private float $weightPig;
    private string $raisingDatePig;
    private string $harvestDatePig;

    public function __construct(
        string $namePig,
        string $typePig,
        float $sizePig,
        float $weightPig,
        string $raisingDatePig,
        string $harvestDatePig
    ) {
        $this->namePig = $namePig;
        $this->typePig = $typePig;
        $this->sizePig = $sizePig;
        $this->weightPig = $weightPig;
        $this->raisingDatePig = $raisingDatePig;
        $this->harvestDatePig = $harvestDatePig;

        echo "*Chuồng Gà <br /> Name: ". $this->name. ", Loại: ". $this->typePig. ", Kích thước: ". $this->sizePig. ", Trọng lượng: ". $this->weightPig. ", Ngày nuôi: ". $this->raisingDatePig. ", Ngày thu hoạch: ". $this->harvestDatePig. "<br />";
        echo "Ịt Ịt ~~~ <br />";
    }
    public function getNamePig() :string {
        return $this->namePig;
    }
    public function getTypePig() :string {
        return $this->typePig;
    }
    public function getSizePig() :float  {
        return $this->sizePig;
    }
    public function getWeighPig() :float {
        return $this->weightPig;
    }
    public function getRaisingDatePig() :string {
        return $this->raisingDatePig;
    }
    public function getHarvestDatePig() :string {
        return $this->harvestDatePig;
    }
}




?>