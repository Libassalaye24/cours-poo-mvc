<?php
namespace App\Core\Orm;

use PDO;
use PDOException;
use App\config\Constantes;
class Database{
    private PDO $pdo;
    public function __construct()
    {
        
    }
    function openConnexion():PDO
    {
        try{   
            $options=[
                PDO::ATTR_CASE => PDO::CASE_LOWER,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]; 
            $pdo = new PDO(Constantes::DB_CHAINE_CONNECTION, Constantes::USER_DB, Constantes::PASSWORD_DB,$options); 
            return $pdo;
           
        }catch (PDOexception $e){
             die ("Erreur: ".$e->getMessage());
        }
    }

    function executeSelect(string $sql,$single=false):array
    {
        return [];
    }

    function executeUpdate(string $sql,array $data):int
    {
        return 0;
    }


}