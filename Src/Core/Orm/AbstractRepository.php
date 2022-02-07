<?php
namespace App\Core\Orm;

class AbstractRepository extends AbstractObject implements RepositoryInterface
{
    public function __construct()
    {
        parent::__construct();
    }
    public function findAll(): array
    {
        $sql="select * from $this->tableName";
        return $this->database->executeSelect($sql);
    }
    public function findById(int $id): array
    {
        $sql="select * from $this->tableName where $this->primaryKey=?";
        return $this->database->executeSelect($sql,[$id]);
    }
   public function findBy(string $sql,array $data,$single=false):array
    {
        return $this->database->executeSelect($sql,$data,$single);

    }

}