<?php
  namespace App\Entity;

use DateTime;



class Inscription
  {
    private DateTime $date;
    
     //ManyToOne => une incription Pour un etudiant
      private Etudiant $etudiant;

    

    /**
     * Get the value of date
     *
     * @return  DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param  DateTime  $date
     *
     * @return  self
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

      /**
       * Get the value of etudiant
       *
       * @return  Etudiant
       */
      public function getEtudiant()
      {
            return $this->etudiant;
      }

      /**
       * Set the value of etudiant
       *
       * @param  Etudiant  $etudiant
       *
       * @return  self
       */
      public function setEtudiant($etudiant)
      {
            $this->etudiant = $etudiant;

            return $this;
      }

      
  }