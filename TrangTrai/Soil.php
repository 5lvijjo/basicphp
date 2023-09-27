<?php

class Soil extends TrongTrot {
    private string $name;
    private string $type;
    private string $status;
    public string $location;  //Nếu class Trangtrai để private calss con để private không chạy, sử dụng chung  thuộc tính khai báo class Parent ????
    private float $size;

    public function __construct(
        string $name,
        string $type,
        string $status,
        string $location,
        float $size
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->status = $status;
        $this->location = $location;
        $this->size = $size;
        echo "*Soil <br /> Name: ". $this->name. ", Type: ". $this->type. ", Status: ". $this->status. ", Location: ". $this->location. ", Size: ". $this->size. "<br />";
    }
    public function getName() :string {
        return $this->name;
    }
    public function getType() :string {
        return $this->type;
    }
    public function getStatus() :string {
        return $this->status;
    }
    public function getlocation() :string {
        return $this->location;
    }
    public function getSize() :float {
        return $this->size;
    }

}

$datBap = new Soil("Đất Đỏ", "Cây ngắn ngày", "Đã trồng", "Khu B-23", 120);
print_r($datBap);
echo "<br />";
$datMy = new Soil("Đất Nâu","Cây ngắn ngày", "Chưa trồng", "Khu B-26", 100);
print_r($datMy);
echo "<br />";
echo "-------<br />";
echo "Status của ". $datBap->getName(). " là: ". $datBap->getStatus(). "<br />";
echo "Vị trí của ". $datMy->getName(). " là: ". $datMy->getLocation(). "<br />";


echo "``````````````````````````````````````````````````````````````<br />";



?>