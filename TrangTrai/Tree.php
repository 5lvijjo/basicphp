<?php

class Tree extends TrongTrot {
    private string $name;
    private string $type;
    private string $plantDate;
    private string $harvestDate;
    
    public function __construct(
        string $name,
        string $type,
        string $plantDate,
        string $harvestDate
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->plantDate = $plantDate;
        $this->harvestDate = $harvestDate;
        echo "*Tree <br /> Name: ". $this->name. ", Type: ". $this->type. ", PlantDate: ". $this->plantDate. ", HarvestDate:". $this->harvestDate. "<br />";
    }
    public function getName() :string {
        return $this->name;
    }
    public function getType() :string {
        return $this->type;
    }
    public function getPlantDate() :string {
        return $this->plantDate;
    }
    public function getHarvestDate() :string {
        return $this->harvestDate;
    }
}

$bap = new Tree("Bắp", "Cây ngắn ngày", "12/7/2023","12/10/2023");
print_r($bap);
echo "<br />";
$my = new Tree("Mỳ", "Cây ngắn ngày", "25/7/2023","28/11/2023");
print_r($my);
echo "<br />";


?>