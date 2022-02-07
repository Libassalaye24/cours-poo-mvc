<?php
  namespace App\Repository;

class RPRepository extends PersonneRepository
  {
    
    public function __construct()
    {
        $this->role="ROLE_RP";
        parent::__construct();
    }

  }