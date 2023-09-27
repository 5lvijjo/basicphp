<?php

class Task {
    
    private string $title;
    private string $type;
    private string $status;

    public function setTiltle(string $title) :void {
        $this->title = $title;
    }
    public function getTitle() :string {
        return $this->title;
    }
    public function setType(string $type) :void {
        $this->type = $type;
    }
    public function getType() :string {
        return $this->type;
    }
    public function setStatus(string $status) :void {
        $this->status = $status;
    }
    public function getStatus() :string {
        return $this->status;
    }

}

$anSang = new Task();
$anSang->setTiltle('Đi ăn sáng');
$anSang->setType('Daily');
$anSang->setStatus('Finish');

echo "*Task <br />";
echo "Title: ". $anSang->getTitle(). "<br />";
echo "Type: ". $anSang->getType(). "<br />";
echo "Status: ". $anSang->getStatus(). "<br />";
echo "----- <br />";




?>