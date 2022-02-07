<?php
  namespace App\Entity;
  class Personne implements EntityInterface
  {
    protected int $id;
    protected string $nomComplet;
    protected string $login;
    protected string $password;

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
    public static function fromArray(object $objet): array
    {
        return [];
    }

    /**
     * Get the value of login
     *
     * @return  string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @param  string  $login
     *
     * @return  self
     */
    public function setLogin(string $login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return  string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param  string  $password
     *
     * @return  self
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }
  }