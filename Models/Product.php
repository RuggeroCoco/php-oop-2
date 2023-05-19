<?php

require_once __DIR__ . "/Category.php";

/**
 * ##Product class
 * defines Product class
 * @author Ruggero Coco
 */

class Product
{
    public $name;
    public $price;
    public $category;
    public $image;

    /**
     * @param String $_name
     * @param Float $_price
     * @param Category $_category
     * @param String $_image
     */
    function __construct(String $_name, Float $_price, Category $_category, String $_image)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->image = $_image;
    }
}
