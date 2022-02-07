<?php

namespace App\Core\Orm;


abstract class AbstractObject
{
    protected string $tableName;
    protected string $primaryKey;
    protected Database $database;
    
    public function __construct()
    {
        $this->database=new Database;
    }
    /**
     * Get the value of tableName
     *
     * @return  string
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set the value of tableName
     *
     * @param  string  $tableName
     *
     * @return  self
     */
    public function setTableName(string $tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }
}