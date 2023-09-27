<?php

class Employee {
    private string $firstName;
    private string $lastName;
    private string $code;
    private string $address;
    private string $role;

    public function setFirstName(string $firstName) :void {
        $this->firstName = $firstName;
    }
    public function getFirstName() :string {
        return $this->firstName;
    }
    public function setLastName(string $lastName) :void {
        $this->lastName = $lastName;
    }
    public function getLastName() :string {
        return $this->lastName;
    }
    public function setCode(string $code) :void {
        $this->code = $code;
    }
    public function getCode() :string {
        return $this->code;
    }
    public function setAddress(string $address) :void {
        $this->address = $address;
    }
    public function getAddress() :string {
        return $this->address;
    }
    public function setRole(string $role) :void {
        $this->role = $role;
    }
    public function getRole() :string {
        return $this->role;
    }
}

$kaMi = new Employee();
$kaMi->setFirstName('Kami');
$kaMi->setLastName('Luka');
$kaMi->setCode('Bt1231');
$kaMi->setRole('employee');
$kaMi->setAddress('sao Hỏa');

echo "*Employee <br />";
echo "Name: ". $kaMi->getFirstName(). " ". $kaMi->getLastName(). "<br />";
echo "Code: ". $kaMi->getCode(). "<br />";
echo "Role: ". $kaMi->getRole(). "<br />";
echo "Address: ". $kaMi->getAddress(). "<br />";
echo "------ <br />";





?>