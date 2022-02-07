<?php
namespace App\Core\Orm;
abstract class AbstractManager extends AbstractObject implements ManagerInterface
{
    public function __construct()
    {
        parent::__construct();
    }
   public function remove(string $sql, int $id): int
    {
        $sql="delete from $this->tableName where $this->primaryKey=?";
        return $this->database->executeUpdate($sql,[$id]);
    }
   
  public function persist(array $model): int
  {
     if (isset($model[$this->primaryKey])) {
      return $this->update($model);
     }else {
        return $this->insert($model);
     }
  }
}