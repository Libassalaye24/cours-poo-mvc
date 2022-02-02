<?php 
namespace App\Manager;

use App\Core\Orm\AbstractManager;

class InscriptionManager extends AbstractManager
{
    public function __construct()
    {
        $this->tableName="inscription";
        $this->primaryKey="idInscription";
    }
}