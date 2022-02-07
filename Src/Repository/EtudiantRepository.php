<?php
  namespace App\Repository;


class EtudiantRepository extends PersonneRepository
  {

    public function __construct()
    {
      $this->role="ROLE_ETU";
      parent::__construct();
    }
    
  }