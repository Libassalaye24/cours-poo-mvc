<?php
  namespace App\Repository;

use App\Core\Orm\AbstractRepository;

class ClassRepository extends AbstractRepository
  {
      public function __construct()
      {
          $this->tableName='classe';
          $this->primaryKey='idClasse';
          parent::__construct();
      }
  }