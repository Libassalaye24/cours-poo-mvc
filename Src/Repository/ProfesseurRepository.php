<?php
  namespace App\Repository;


class ProfesseurRepository extends PersonneRepository
{
  public function __construct()
  {
    $this->role="ROLE_PR";
    parent::__construct();
  }
}