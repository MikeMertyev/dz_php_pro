<?php
namespace models;
//use \services\Autoloader as Loader;

class Product extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $customer_id;

    public function getTableName()  : string
    {
        return "products";
    }
}