<?php
  namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Professeur extends Personne
  {
      private string $grade;
      private ArrayCollection $classe;

      public function __construct()
      {
        $this->class=new ArrayCollection();
      }
      /**
       * Get the value of grade
       *
       * @return  string
       */
      public function getGrade()
      {
            return $this->grade;
      }

      /**
       * Set the value of grade
       *
       * @param  string  $grade
       *
       * @return  self
       */
      public function setGrade(string $grade)
      {
            $this->grade = $grade;

            return $this;
      }
  }