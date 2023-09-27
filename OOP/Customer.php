<?php

class Customer {
    // Properties
    private string $code;
    private string $name;
    private float $capital;
    private string $iD_trader;
    
    // Methods
    public function setCode(string $code) :void {
        $this->code = $code;
    }
    public function getCode() :string {
        return $this->code;
    }
    public function setName(string $name) :void {
        $this->name = $name;
    }
    public function getName() :string {
        return $this->name;
    }
    public function setCapital(float $capital) :void {
        $this->capital = $capital;
    }
    public function getCapital() :float {
        return $this->capital;
    }
    public function setIDTrader(int $iDTrader) :void { 
        $this->iDTrader = $iDTrader;
    }
    public function getIDTrader() :int {
        return $this->iDTrader;
    }


}

$zoro = new Customer();

$zoro->setCode('0001213');
$zoro->setName('Zoro Lạc Đường');
$zoro->setCapital(500000000);
$zoro->setIDTrader(231);

echo "*Customer <br />";
echo "Name: ". $zoro->getName(). "<br />";
echo "Code: ". $zoro->getCode(). "<br />";
echo "Capital: ". $zoro->getCapital(). "<br />";
echo "ID_trader: ". $zoro->getIDTrader(). "<br />";
echo "----- <br />";



?>