<?php
namespace App\Core\Orm;

    interface ManagerInterface
    {
        function insert(array $data):int;
        function remove(string $sql,array $data):int;
        function update(array $data):int;
        //function persisit(array $data,string $sql):int;
    }