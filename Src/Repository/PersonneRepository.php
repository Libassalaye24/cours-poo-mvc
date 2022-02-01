<?php
  namespace App\Repository;

  class PersonneRepository
  {
    private string $role="ROLE_PERSONNE";

    public function __construct()
    {
      $this->tableName="user";
      $this->primaryKey="id";
    }
    public function findAll(): array
    {
        $sql="select * from $this->tableName where role=$this->role";
        return $this->database->executeSelect($sql);
    }
    
  }