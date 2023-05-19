<?php

/**
 * ## Category class
 * definies Category class
 * @author Ruggero Coco
 */
class Category
{
    function __construct(public $name, public $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }
}
