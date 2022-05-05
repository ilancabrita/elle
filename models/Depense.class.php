<?php

class Depense
{
    private $idDepense;
    private $depense;
    private $date;
    private $description;
    private $lieux;
    private $valeur;
    private $typeDePaiement;

    public function __construct($idDepense, $depense, $date, $description, $lieux, $valeur, $typeDePaiement)
    {
        echo "Instanciation.......";
        $this->setIdDepense($idDepense);
        $this->setDepense($depense);
        $this->setDate($date);
        $this->setDescription($description);
        $this->setLieux($lieux);
        $this->setValeur($valeur);
        $this->setTypeDePaiement($typeDePaiement);
    }

    public function __construct($depense, $date, $description, $lieux, $valeur)
    {
        echo "Instanciation.......";
        $this->setdepense($depense);
        $this->setdate($date);
        $this->setdescription($description);
        $this->setlieux($lieux);
        $this->setvaleur($valeur);
        $this->setTypeDePaiement($typeDePaiement);
    }

    public function setIdDepense($newIdDepense)
    {   
        if (is_string($newIdDepense)) {
            $this->idDepense = $newIdDepense;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getIdDepense()
    {
        return $this->idDepense;
    }


    public function setDepense($newDepense)
    {
        if (is_numeric($newDepense)) {
            $this->depense = $newDepense;
        } 
        else {
            trigger_error("Ce n'est pas un chiffre", E_USER_ERROR);
        }
    }

    public function getDepense()
    {
        return $this->depense;
    }

    public function setDate($newDate)
    {
        if (is_numeric($newDate)) {
            $this->date = $newDate;
        } 
        else {
            trigger_error("Ce n'est pas un chiffre", E_USER_ERROR);
        }
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDescription($newDescription)
    {
        if (is_string($newDescription)) {
            $this->description = $newDescription;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setLieux($newLieux)
    {
        if (is_string($newLieux)) {
            $this->lieux = $newLieux;
        } 
        else {
            trigger_error("Ce n'est pas un mot", E_USER_ERROR);
        }
    }

    public function getLieux()
    {
        return $this->lieux;
    }

    public function setValeur($newValeur)
    {
        if (is_numeric($newValeur)) {
            $this->valeur = $newValeur;
        } 
        else {
            trigger_error("Ce n'est pas un chiffre", E_USER_ERROR);
        }
    }

    public function getValeur()
    {
        return $this->valeur;
    }

    public function setTypeDePaiement($newTypeDePaiement)
    {
        if (is_numeric($newTypeDePaiement)) {
            $this->typeDePaiement = $newTypeDePaiement;
        } 
        else {
            trigger_error("Ce n'est pas un chiffre", E_USER_ERROR);
        }
    }

    public function getTypeDePaiement()
    {
        return $this->typeDePaiement;
    }
}