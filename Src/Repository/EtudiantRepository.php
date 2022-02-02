<?php
  namespace App\Repository;

use App\Core\Orm\AbstractRepository;

class EtudiantRepository extends AbstractRepository
  {
    private string $role="ROLE_ETUDIANT";

    public function __construct()
    {
      $this->tableName="user";
      $this->primaryKey="id";
    }
    
  }