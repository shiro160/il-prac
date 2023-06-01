<?php


class Car{
    public $brand;
    public $model;
    public $price;

    public function __construct($brand, $model, $price) {   
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    }

    public function displayCarInfo(){
        echo "ブランド: " . $this->brand . "  車種: " . $this->model . " 価格: " . $this->price;
    }

}

$car1 = new Car("Toyota", "Camry", 25000);

$car1->displayCarInfo();

echo "<br>";

$car2 = new Car("Honda", "Civic", 20000);

$car2->displayCarInfo();




