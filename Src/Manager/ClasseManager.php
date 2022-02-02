<?php 
namespace App\Manager;

use App\Core\Orm\AbstractManager;

class ClasseManager extends AbstractManager
{
    public function __construct()
    {
        $this->tableName='classe';
        $this->primaryKey='idClasse';
    }
    public function insert(array $data): int
    {
        $sql="insert into $this->tableName (`libelle`) values (?)";
        return $this->database->executeUpdate($sql,$data);
    }
    public function update(array $data): int
    {
        $sql="update $this->tableName set `libelle` = ? 
                where $this->primaryKey=?";
        return $this->database->executeUpdate($sql,$data);
    }
}
