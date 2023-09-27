<?php

class Trade {
    
    private string $type;
    private string $stock;
    private float $price;
    private int $volume;

    public function setType(string $type) :void {
        $this->type = $type;
    }
    public function getType() :string {
        return $this->type;
    }
    public function setStock(string $stock) :void {
        $this->stock = $stock;
    }
    public function getStock() :string {
        return $this->stock;
    }
    public function setPrice(float $price) :void {
        $this->price = $price;
    }
    public function getPrice() :float {
        return $this->price;
    }
    public function setVolume(int $volume) :void {
        $this->volume = $volume;
    }
    public function getVolume() :int {
        return $this->volume;
    }

}

$pika = new Trade();
$pika->setType('Buy');
$pika->setStock('D18');
$pika->setPrice(12.400500);
$pika->setVolume(5000);

echo "*Volume <br />";
echo "Type: ". $pika->getType(). "<br />";
echo "Stock: ". $pika->getStock(). "<br />";
echo "Price: ". $pika->getPrice(). "<br />";
echo "Volume: ". $pika->getVolume(). "<br />";
echo "------- <br />";


?>