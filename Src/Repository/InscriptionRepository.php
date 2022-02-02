<?php
  namespace App\Repository;

use App\Core\Orm\AbstractRepository;

class InscriptionRepository extends AbstractRepository
{
    public function __construct()
    {
      $this->tableName="inscription";
      $this->primaryKey="idInscription";
    }
}