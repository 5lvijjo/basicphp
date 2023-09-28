<?php

class Tools {

    private string $nameTools;
    private string $typeTools;
    private float $sizeTools;
    private float $weightTools;
    private string $brandTools;
    private int $countTools;

    public function __construct(
        string $nameTools,
        string $typeTools,
        float $sizeTools,
        float $weightTools,
        string $brandTools,
        int $countTools
    ) {
        $this->nameTools = $nameTools;
        $this->typeTools = $typeTools;
        $this->sizeTools = $sizeTools;
        $this->weightTools = $weightTools;
        $this->brandTools = $brandTools;
        $this->countTools = $countTools;

    }
    public function getNameTools() :string {
        return $this->nameTools;
    }
    public function getTypeTools() :string {
        return $this->typeTools;
    }
    public function getSizeTools() :float  {
        return $this->sizeTools;
    }
    public function getWeighTools() :float {
        return $this->weightTools;
    }
    public function getBrandTools() :string {
        return $this->brandTools;
    }
    public function getCountTools() :int {
        return $this->countTools;
    }
}


?>