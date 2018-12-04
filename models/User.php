<?php
namespace models;


class User extends Model
{
    public $id;
    public $login;
    public $password;

    protected $tableName = "users";

    public function getTableName()  : string
    {
       return "users";
    }


}