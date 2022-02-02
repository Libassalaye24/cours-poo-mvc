<?php
namespace App\Core\Orm;
abstract class AbstractManager extends AbstractObject implements ManagerInterface
{
   public function remove(string $sql, array $data): int
    {
        $sql="delete from $this->tableName where $this->primaryKey=?";
        return $this->database->executeUpdate($sql,$data);
    }
   public function insert(array $data): int
   {
    $sql="insert into $this->tableName";
    return $this->database->executeUpdate($sql,$data);
   }
   public function update(array $data): int
   {
    $sql="update $this->tableName";
    return $this->database->executeUpdate($sql,$data);
   }
}