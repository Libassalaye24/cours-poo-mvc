<?php 
namespace App\Manager;

use App\Core\Orm\AbstractManager;

class EtudiantManager extends AbstractManager
{
    private string $role="ROLE_PERSONNE";
   public function __construct()
   {
    $this->tableName="user";
    $this->primaryKey="idUser";
   }
   public function insert(array $data): int
   {
       $sql="insert into $this->tableName (`nom`,`prenom`,`prenom`,`tuteur`,`matricule`,$this->role) values (?,?,?,?,?,?)";
       return $this->database->executeUpdate($sql,$data);
   }
   public function update(array $data): int
   {
       $sql="update $this->tableName set `nom` = ?,`prenom` = ?,`tuteur` = ?,`matricule` = ?
               where $this->primaryKey=?";
       return $this->database->executeUpdate($sql,$data);
   }
}