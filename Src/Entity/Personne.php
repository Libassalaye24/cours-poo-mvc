<?php
  namespace App\Entity;
  class Personne
  {
    protected int $id;
    protected string $nomComplet;

    /**
     * Get the value of nomComplet
     *
     * @return  string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @param  string  $nomComplet
     *
     * @return  self
     */
    public function setNomComplet(string $nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return  int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
    function affiche():string
    {
        return $this->getId().' '.$this->getNomComplet();
    }
  }