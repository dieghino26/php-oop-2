<?php

require_once __DIR__ . "/Category.php";

class Product
{
    protected $id;
    protected $name;
    protected $image;
    protected $price;
    protected Category $category;
}
