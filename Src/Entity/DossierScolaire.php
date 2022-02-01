<?php
  namespace App\Entity;

use DateTime;

class DossierScolaire
  {
    private int $id;
    private DateTime $dateCreation;
    private Etudiant $etudiant;
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

    /**
     * Get the value of dateCreation
     *
     * @return  DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     *
     * @param  DateTime  $dateCreation
     *
     * @return  self
     */
    public function setDateCreation(DateTime $dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }
  }