<?php
class Ferrari extends Car {

    public function __construct() {
        $this->maker = "Ferrari";
        $this->price = 7000000 + rand(1000000, 5000000);
        $this->capacity = 3;
        $this->speed = 270;

        global $total;
        $total += $this->price;
    }
}