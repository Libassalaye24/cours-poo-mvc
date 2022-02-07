<?php
namespace App\Core\Orm;

use PDO;
use PDOException;
//use App\config\Constantes;
class Database{
    private PDO|null $pdo=null;
   ///private int | float $x;
   
   private const HOST_DB='localhost';
   private const USER_DB='root';
   private const PASSWORD_DB='Libasse';
   private const DB_CHAINE_CONNECTION="mysql:host=localhost;dbname=cours_poo_mvc";

   public function __construct()
   {
       $this->openConnexion();
   }

   public function openConnexion()
    {
        try{   
           if ($this->pdo==null) {
               $this->pdo = new PDO(self::DB_CHAINE_CONNECTION, self::USER_DB, self::PASSWORD_DB); 
               $this->pdo->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
               $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               $this->pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,"SET NAMES 'utf8'");
            }
        }catch (PDOexception $e){
             die ("Erreur connexion failed: ".$e->getMessage());
        }
    }

    public function closeConnexion()
    {
        $this->pdo=null;
    }

    public function executeSelect(string $sql,array $data=null,$single=false):array
    {
        $stm=$this->pdo->prepare($sql);
        if (is_null($data)) {
            $stm->execute($data);
        }
        $stm->execute();

        return $single ? $stm->fetch(PDO::FETCH_OBJ) : $stm->fetchAll(PDO::FETCH_OBJ);
    }

    public function executeUpdate(string $sql,array $data):int
    {
        $stm=$this->pdo->prepare($sql);
        $stm->execute(array_values($data));
        if (!strpos(strtolower($sql),strtolower("insert"))) {
           return $this->pdo->lastInsertId();
        }
        return $stm->rowCount();
    }


}