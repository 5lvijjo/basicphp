<?php

class ChuongBo extends Chuong {
    private string $nameCow;
    private string $typeCow;
    private float $sizeCow;
    private float $weightCow;
    private string $raisingDateCow;
    private string $harvestDateCow;

    public function __construct(
        string $nameCow,
        string $typeCow,
        float $sizeCow,
        float $weightCow,
        string $raisingDateCow,
        string $harvestDateCow
    ) {
        $this->nameCow = $nameCow;
        $this->typeCow = $typeCow;
        $this->sizeCow = $sizeCow;
        $this->weightCow = $weightCow;
        $this->raisingDateCow = $raisingDateCow;
        $this->harvestDateCow = $harvestDateCow;

        echo "*Chuồng Gà <br /> Name: ". $this->name. ", Loại: ". $this->typeCow. ", Kích thước: ". $this->sizeCow. ", Trọng lượng: ". $this->weightCow. ", Ngày nuôi: ". $this->raisingDateCow. ", Ngày thu hoạch: ". $this->harvestDateCow. "<br />";
        echo "Um bò ~~~ <br />";
    }
    public function getNameCow() :string {
        return $this->nameCow;
    }
    public function getTypeCow() :string {
        return $this->typeCow;
    }
    public function getSizeCow() :float  {
        return $this->sizeCow;
    }
    public function getWeighCow() :float {
        return $this->weightCow;
    }
    public function getRaisingDateCow() :string {
        return $this->raisingDateCow;
    }
    public function getHarvestDateCow() :string {
        return $this->harvestDateCow;
    }
}




?>