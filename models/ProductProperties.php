<?php
namespace models;

class ProductProperties
{
    public $name;
    public $category;
    public $color;
    public $size;
    public $price;

    public function getTableName()  : string
    {
        return "productProperties";
    }

}