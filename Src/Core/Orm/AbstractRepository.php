<?php
namespace App\Core\Orm;

abstract class AbstractRepository extends AbstractObject implements RepositoryInterface
{
    public function findAll(): array
    {
        $sql="select * from $this->tableName";
        return $this->database->executeSelect($sql);
    }
    public function findById(int $id): array
    {
        $sql="select * from $this->tableName where $this->primaryKey=$id";
        return $this->database->executeSelect($sql);
    }
}