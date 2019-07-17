<?php
class Honda extends Car {

    public function __construct() {
        $this->maker = "Honda";
        $this->price = 2500000 + rand(1000000, 4500000);
        $this->capacity = 6;
        $this->speed = 160;

        global $total;
        $total += $this->price;
    }
}