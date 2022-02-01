<?php

namespace App\Core\Orm;


abstract class AbstractObject
{
    protected string $tableName;
    protected string $primaryKey;
    protected Database $database;
    
}