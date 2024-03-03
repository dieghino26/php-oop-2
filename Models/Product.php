<?php

class Product
{

    public $name;
    public $image;
    public $price;
    public $quantity;
    public $description;
    public $category;


    public function __construct(
        $name = null,
        $image = null,
        $price = null,
        $quantity = null,
        $description = null,
        $category = null,
    ) {

        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->category = $category;
    }
}
