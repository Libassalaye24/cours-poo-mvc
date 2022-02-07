<?php
namespace App\Core\Orm;

    interface ManagerInterface
    {
        function insert(array $data):int;
        function remove(string $sql,int $id):int;
        function update(array $data):int;
        function persist(array $model):int;
    }