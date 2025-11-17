<?php

    class Fruit{
        public $name;
        public $color;

        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        function get_details(){
            $this->privateproperty = "This is a secret";
            return "This fruit is a {$this->name} and its color is {$this->color}.{$this->privateproperty}";
        }
        

    }


    $strawberry = new Fruit("Strawberry", "Red");
    $banana = new Fruit("Banana", "Yellow");


    echo "First fruit: " . $strawberry->get_name() . " is " . $strawberry->get_color() . "\n";
    echo "Second fruit: " . $banana->get_name() . " is " . $banana->get_color() . "\n";
?>