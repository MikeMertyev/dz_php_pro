<?php
namespace models;

use services\Db, interfaces\IModel;

abstract class Model implements IModel
{
    protected $db;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->db = new Db();
    }

    public function getOne(int $id) : array
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

    public function getAll() : array
    {
        $sql = "SELECT * FROM {$this->tableName}";
        return $this->db->queryAll($sql);
    }


}