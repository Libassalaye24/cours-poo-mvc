<?php 
namespace App\Manager;

use App\Core\Orm\AbstractManager;

class DossierScolaireManager extends AbstractManager
{
    public function __construct()
    {
        $this->tableName='dossier';
        $this->primaryKey='idDossier';
    }
    public function insert(array $data): int
    {
        $sql="insert into $this->tableName (`date`,`idUser`) values (?,?)";
        return $this->database->executeUpdate($sql,$data);
    }
    public function update(array $data): int
    {
        $sql="update $this->tableName set `date` = ?,`idUser` = ?
                where $this->primaryKey=?";
        return $this->database->executeUpdate($sql,$data);
    }
}