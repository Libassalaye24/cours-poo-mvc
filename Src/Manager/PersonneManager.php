<?php 
namespace App\Manager;

use App\Core\Orm\AbstractManager;

class PersonneManager extends AbstractManager
{
    
    public function __construct()
    {
        parent::__construct();
        $this->tableName="user";
        $this->primaryKey="idUser";
    }

    public function insert(array $data): int
    {
        $sql="insert into $this->tableName (`nom`,`prenom`,`tuteur`,`matricule`,`grade`,`login`,`password`,`role`) values (?,?,?,?,?,?,?,?)";
        return $this->database->executeUpdate($sql,$data);
    }
    public function update(array $data): int
    {
        $sql="update $this->tableName set `nom` = ?,`prenom` = ?,`tuteur` = ?,`matricule` = ?,`grade` = ?,`login` = ?,`password` = ?,`role` =?
                where $this->primaryKey=?";
        return $this->database->executeUpdate($sql,$data);
    }
}
