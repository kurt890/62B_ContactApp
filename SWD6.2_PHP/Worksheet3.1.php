<?php

class Car {
    public $make;
    public $model;
    public $color;
    protected $price;
    public static $wheels = 4;

    public function __construct($make, $model, $color = null, $price = null) {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
    }

 
    public function get_model() {
        return $this->model;
    }

    public function get_color() {
        return $this->color;
    }

    public function get_price() {
        return $this->price;
    }

    public static function get_wheels() {
        return self::$wheels;
    }

    public function get_details() {
        $parts = [];
        $parts[] = "Make: {$this->make}";
        $parts[] = "Model: {$this->model}";
        if ($this->color !== null) $parts[] = "Color: {$this->color}";
        if ($this->price !== null) $parts[] = "Price: EUR " . number_format($this->price, 0, ',', '.');
        $parts[] = "Wheels: " . self::$wheels;
        return implode(', ', $parts);
    }
}


$blackPorsche = new Car('Porsche', '911', 'Black', 90000);
echo $blackPorsche->get_details() . "\n";

?>