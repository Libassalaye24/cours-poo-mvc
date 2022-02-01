<?php
  namespace App\Repository;


  class EtudiantRepository
  {
    private string $role="ROLE_ETUDIANT";

    public function __construct()
    {
      $this->tableName="user";
      $this->primaryKey="id";
    }
    
  }