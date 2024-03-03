<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{

    public $exparation;

    public function __construct(
        $name = null,
        $exploration = null,
        $image = null,
        $price = null,
        $quantity = null,
        $description = null,
        $category = null,
    ) {
        parent::__construct($name, $image, $price, $quantity, $description, $category);
        $this->exploration = $exploration;
    }
}
