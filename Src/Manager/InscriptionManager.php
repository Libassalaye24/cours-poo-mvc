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
    function insert(array $data):int
    {
        return 0;
    }
    public function update(array $data): int
    {
        return 0;
    }

}