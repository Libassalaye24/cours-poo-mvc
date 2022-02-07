<?php
  namespace App\Repository;

class APRepository extends PersonneRepository
  {
    public function __construct()
    {
      $this->role="ROLE_AC";
        parent::__construct();
    }
    
  }