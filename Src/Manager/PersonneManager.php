<?php 
namespace App\Manager;

use App\Core\Orm\AbstractManager;

class PersonneManager extends AbstractManager
{
    private string $role="ROLE_PERSONNE";

    public function __construct()
    {
        $this->tableName="user";
        $this->primaryKey="idUser";
    }

    public function insert(array $data): int
    {
        $sql="insert into $this->tableName (`nom`,`prenom`,`prenom`,`tuteur`,`matricule`,`grade`,$this->role) values (?,?,?,?,?,?,?)";
        return $this->database->executeUpdate($sql,$data);
    }
    public function update(array $data): int
    {
        $sql="update $this->tableName set `nom` = ?,`prenom` = ?,`tuteur` = ?,`matricule` = ?,`grade` = ?
                where $this->primaryKey=?";
        return $this->database->executeUpdate($sql,$data);
    }
}
