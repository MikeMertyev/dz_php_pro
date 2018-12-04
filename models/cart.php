<?php

namespace models;


class Cart extends Model
{
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $summary;

    public function getTableName()  : string
    {
        return "cart";
    }
}