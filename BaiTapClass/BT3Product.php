<?php

class Products {
    private array $arrayProducts;

    public function __construct() {
        $this->arrayProducts = [
            ["ID" => "001", "Name" => "Audi", "Price" => "2000", "Stock" => "8"],
            ["ID" => "002", "Name" => "Porsche", "Price" => "4000", "Stock" => "3"],
            ["ID" => "003", "Name" => "Ferrari", "Price" => "5000", "Stock" => "4"],
            ["ID" => "004", "Name" => "Lamborghini", "Price" => "4500", "Stock" => "5"],
            ["ID" => "005", "Name" => "Bugatti", "Price" => "8000", "Stock" => "1"],
            ["ID" => "006", "Name" => "Rolls Royce", "Price" => "4500", "Stock" => "5"],
            ["ID" => "007", "Name" => "Mercedes Benz", "Price" => "2000", "Stock" => "10"]
        ];
    }
    
    
# get / insert / update / delete / Search
    public function getProducts() {
        foreach($this->arrayProducts as $key => $value) {
            echo "``````<br />";
            foreach($value as $key => $value) {
                echo $value. "<br />";
            }
        }
    }
    public function insertProducts($insert) {
        // array_push($this->arrayProducts,$insert);
        $this->arrayProducts[] = $insert;
    }
    public function updateProducts($update) {
        $check = false;
        $activeKey = null;
        foreach($this->arrayProducts as $key => $value) {
            if($value["ID"] == $update["ID"]){
                $check = true;
                $activeKey = $key;
                break;
            }
        }
        $this->arrayProducts[$activeKey]= $update;
        if($check == false) {
            echo "Products doesn't exist <br />";
        }
    }
    public function deleteProducts($delete) {
        $check = false;
        $activeKey = null;
        foreach($this->arrayProducts as $key => $value) {
            if($value["ID"]== $delete["ID"]) {
                $check = true;
                $activeKey = $key;
                break;
            }
        }
        unset($this->arrayProducts[$activeKey]);
        if($check == false) {
            echo "Products doesn't exist <br />";
        }
    }
    public function searchIDProducts($searchID) {
        $check = false;
        foreach($this->arrayProducts as $key => $value) {
            if($value["ID"] == $searchID["ID"]) {
                $check = true;
                foreach($value as $key => $value) {
                    echo $value. "<br />";
                }
                break;
            }
        }
        if($check == false) {
            echo "Products doesn't exist <br />";
        }
    }
    public function searchProducts($search) {
        $check = false;
        foreach($this->arrayProducts as $key => $value) {
            // if(strlen(strstr(strtolower($value['Name']), strtolower($search))) > 0) {
            if(strpos(strtolower($value['Name']), strtolower($search)) !== false) {
                $check = true;
                foreach($value as $key => $value) {
                    echo $value. "<br />";
                }
            }
        }
        if($check == false) {
            echo "Products doesn't exist <br />";
        }
        
    }


}

$as = new Products();
echo "<br /> ---------<br />";
$as->getProducts();
echo "<br/> <br /> *insert <br />-----------------<br />";
$insert = ["ID" => "008", "Name" => "Bentley", "Price" => "5500", "Stock" => "3"];
$as->insertProducts($insert);
$as->getProducts();
echo "<br/> <br /> *update <br />-----------------<br />";
$update = ["ID" => "008", "Name" => "Bentley", "Price" => "4000", "Stock" => "2"];
$as->updateProducts($update);
$as->getProducts();
echo "<br/> <br /> *delete <br />-----------------<br />";
$delete = ["ID" => "008", "Name" => "Bentley", "Price" => "4000", "Stock" => "2"];
$as->deleteProducts($delete);
$as->getProducts();
echo "<br/> <br /> *search <br />-----------------<br />";
$searchID = ["ID" => "002"];
$as->searchIDProducts($searchID);
echo "--------<br />";
$search = "a";
$as->searchProducts($search);


?>