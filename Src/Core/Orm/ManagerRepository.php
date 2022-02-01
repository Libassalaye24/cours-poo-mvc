<?php
namespace App\Core\Orm;

interface ManagerInterface
{
    function insert():int;
    function remove(int $id):int;
    function update(array $data,int $id):int;
    function persisit(array $data,int $id=null):int;
}