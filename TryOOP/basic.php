<?php

class Vehical {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getDetail() {
        echo "The car make {$this->make}, model is {$this->model}, and the year is {$this->year}<br>";
    }
}

class BMW extends Vehical {
    public $fuel_type;

    public function __construct($make, $model, $year, $fuel_type) {
        // parent::__construct($make, $model, $year); 
        $this->fuel_type = $fuel_type;
    }

    public function getDetail() {
        parent::getDetail(); 
        echo "The fuel type is {$this->fuel_type}<br>"; 
    }
}

$bmw = new BMW('BMW', '650', '2020', 'Petrol');
$bmw->getDetail(); 

?>
