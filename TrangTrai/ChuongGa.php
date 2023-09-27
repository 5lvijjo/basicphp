<?php

class ChuongGa extends Chuong {
    private string $nameChick;
    private string $typeChick;
    private float $sizeChick;
    private float $weightChick;
    private string $raisingDateChick;
    private string $harvestDateChick;

    public function __contructs(
        string $nameChick,
        string $typeChick,
        float $sizeChick,
        float $weightChick,
        string $raisingDateChick,
        string $harvestDateChick
    ) {
        $this->nameChick = $nameChick;
        $this->typeChick = $typeChick;
        $this->sizeChick = $sizeChick;
        $this->weightChick = $weightChick;
        $this->raisingDateChick = $raisingDateChick;
        $this->harvestDateChick = $harvestDateChick;

        echo "*Chuồng Gà <br /> Name: ". $this->name. 
        ", Loại: ". $this->typeChick. 
        ", Kích thước: ". $this->sizeChick. 
        ", Trọng lượng: ". $this->weightChick. 
        ", Ngày nuôi: ". $this->raisingDateChick. 
        ", Ngày thu hoạch: ". $this->harvestDateChick. 
        "<br />";
        echo "Cục tác ~~~ <br />";
    }
    public function getNameChick() :string {
        return $this->nameChick;
    }
    public function getTypeChick() :string {
        return $this->typeChick;
    }
    public function getSizeChick() :float  {
        return $this->sizeChick;
    }
    public function getWeighChick() :float {
        return $this->weightChick;
    }
    public function getRaisingDateChick() :string {
        return $this->raisingDateChick;
    }
    public function getHarvestDateChick() :string {
        return $this->harvestDateChick;
    }
}




?>