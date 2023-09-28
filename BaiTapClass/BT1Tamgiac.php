<?php

class triangle {
    private float $side1;
    private float $side2;
    private float $side3;
    private float $C;



    public function __construct(float $side1, float $side2, float $side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function getSide1() :float {
        return $this->side1;
    }
    public function getSide2() :float {
        return $this->side2;
    }
    public function getSide3() :float {
        return $this->side3;
    }
    public function getPerimeter() :float {
        $this->perimeter();
        return $this->C;
    }
    public function getArea() :float {
        $S = $this->area();
        return $S;
    }
    private function perimeter() :void {
        $this->C = $this->side1 + $this->side2 + $this->side3;
    }
    private function area() :float {
        $p = ($this->side1 + $this->side2 + $this->side3)/2;
        $S = sqrt($p* ($p - $this->side1)* ($p - $this->side2)* ($p - $this->side3));
        return $S;
    }
}

$aBC = new triangle(5, 8, 6);
print_r($aBC);
echo "<br/>";
echo "Side 1, 2, 3 of a triangle are: ". $aBC->getSide1(). ", ". $aBC->getSide2(). ", ". $aBC->getSide3(). ". <br />";
echo "Perimeter of a triangle ABC is: <br />";
echo $aBC->getPerimeter();
echo "<br />";
echo "Area of a Triangle ABC is: <br />";
echo $aBC->getArea();
echo "<br />";
echo "``````````````````` <br />";





?>