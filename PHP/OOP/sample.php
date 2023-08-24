<?php
class Car{
    public $make;
    public $model;


    public function __construct($make,$model){
        $this->$make = $make;
        $this->model = $model;
    }

    public function startEngine(){
        echo "Engine started for $this->make $this->model";
    }

}

$myCar = new Car("Toyota","Corolla");
$myCar -> startEngine();


?>