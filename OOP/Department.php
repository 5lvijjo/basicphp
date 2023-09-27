<?php

class Department {
    private string $code;
    private string $name;

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
}

$nhanSu = new Department();
$nhanSu->setCode(12223);
$nhanSu->setName('Orchimaru san');

echo "*Department <br />";
echo "Name: ". $nhanSu->getName(). "<br />";
echo "Code: ". $nhanSu->getCode(). "<br />";
echo "------ <br />";





?>