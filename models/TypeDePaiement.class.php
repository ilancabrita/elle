<?php

class TypeDePaiement extends Depense
{
    private $idTypeDePaiement;
    private $nom;
    private $abreviationTypeDePaiement;


    public function __construct($idTypeDePaiement, $nom, $abreviationTypeDePaiement)
    {
        echo "Instanciation.......";
        $this->setIdTypeDePaiement($idTypeDePaiement);
        $this->setNom($nom);
        $this->setAbreviationTypeDePaiement($abreviationTypeDePaiement);
    }

    public function __construct($nom, $abreviationTypeDePaiement)
    {
        echo "Instanciation.......";
        $this->setNom($nom);
        $this->setAbreviationTypeDePaiement($abreviationTypeDePaiement);
    }

    public function setIdTypeDePaiement($newIdTypeDePaiement)
    {   
        if (is_string($newIdTypeDePaiement)) {
            $this->idTypeDePaiement = $newIdTypeDePaiement;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getIdTypeDePaiement()
    {
        return $this->idTypeDePaiement;
    }

    public function setNom($newNom)
    {   
        if (is_string($newNom)) {
            $this->nom = $newNom;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setAbreviationTypeDePaiement($newAbreviationTypeDePaiement)
    {
        if (is_numeric($newAbreviationTypeDePaiement) && iconv_strlen($newAbreviationTypeDePaiement)) {
            $this->abreviationTypeDePaiement = $newAbreviationTypeDePaiement;
        } 
        else {
            trigger_error("Ce n'est pas un chiffre", E_USER_ERROR);
        }
    }

    public function getAbreviationTypeDePaiement()
    {
        return $this->abreviationTypeDePaiement;
    }
}