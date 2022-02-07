<?php
  namespace App\Repository;

use App\Core\Orm\AbstractRepository;

class PersonneRepository extends AbstractRepository
  {
    private string $role;

    public function __construct()
    {
      parent::__construct();
      $this->tableName="user";
      $this->primaryKey="idUser";
    }
   
    public function findAll(): array
    {
        $sql="select * from $this->tableName where role like ?";
        return $this->database->executeSelect($sql,[$this->role]);
    }
    
  }