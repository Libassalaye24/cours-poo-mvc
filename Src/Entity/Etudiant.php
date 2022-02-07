<?php
  namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Etudiant extends Personne
  {
      private string $tuteur;
      private string $matricule;
      private DossierScolaire $dossierScolaire;
      //propriete navigationnelle ManyToOne
      //collection
      private ArrayCollection $inscriptions;

      public function __construct()
      {
        $this->inscriptions=new ArrayCollection();
      }

      public function addInscription(Inscription $inscription):self{
        if (!$this->inscription->contains($inscription)) {
            $this->inscription->add($inscription);
            $inscription->setEtudiant($this);
           
        }
        return $this;
    }
       public function removeInscription(Inscription $inscription):self
      {
         if ($this->inscriptions->contains($inscription)) {
           # code...
           $inscription->setEtudiant(null);
           $this->inscription->removeElement($inscription);
         }
         return $this;
      } 
      /**
       * Get the value of inscriptions
       *
       * @return  ArrayCollection
       */
      public function getInscriptions()
      {
            return $this->inscriptions;
      }

      /**
       * Set the value of inscriptions
       *
       * @param  ArrayCollection  $inscriptions
       *
       * @return  self
       */
      public function setInscriptions(ArrayCollection $inscriptions)
      {
            $this->inscriptions = $inscriptions;

            return $this;
      }

      /**
       * Get the value of tuteur
       *
       * @return  string
       */
      public function getTuteur()
      {
            return $this->tuteur;
      }

      /**
       * Set the value of tuteur
       *
       * @param  string  $tuteur
       *
       * @return  self
       */
      public function setTuteur(string $tuteur)
      {
            $this->tuteur = $tuteur;

            return $this;
      }
      public function affiche(): string
      {
        return parent::affiche().' '.$this->tuteur;
      }


      /**
       * Get the value of matricule
       *
       * @return  string
       */
      public function getMatricule()
      {
            return $this->matricule;
      }

      /**
       * Set the value of matricule
       *
       * @param  string  $matricule
       *
       * @return  self
       */
      public function setMatricule(string $matricule)
      {
            $this->matricule = $matricule;

            return $this;
      }
  }