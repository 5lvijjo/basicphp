<?php

class Chuong extends Channuoi {
    private string $name;
    private string $type;
    private string $location;
    private float $size;

    public function __contructs(
        string $name,
        string $type,
        string $location,
        float $size
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->location = $location;
        $this->size = $size;
        echo "*Chuồng <br /> Name: ". $this->name. ", Type: ". $this->type. ", Location: ". $this->location. ", Size: ". $this->size. "<br />";
    }
    public function getName() :string {
        return $this->name;
    }
    public function getType() :string {
        return $this->type;
    }
    public function getLocation() :string {
        return $this->location;
    }
    public function getSize() :float {
        return $this->size;
    }
    
}

$chuong = new Chuong;












?>