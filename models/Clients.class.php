<?php
require_once 'User.class.php';
class Clients extends Connection
{
    private $idClient;
    private $adresse;
    private $codePostale;
    private $ville;
    private $pays;
    private $telephone;

    public function __construct($idClient, $adresse, $codePostale, $ville, $pays, $telephone)
    {
        echo "Instanciation.......";
        $this->setIdClient($idClient);
        $this->setAdresse($adresse);
        $this->setCodePostale($codePostale);
        $this->setVille($ville);
        $this->setPays($pays);
        $this->setTelephone($telephone);
    }

    public function __construct($adresse, $codePostale, $ville, $pays, $telephone)
    {
        echo "Instanciation.......";
        $this->setAdresse($adresse);
        $this->setCodePostale($codePostale);
        $this->setVille($ville);
        $this->setPays($pays);
        $this->setTelephone($telephone);
    }

    public function setIdClient($newIdClient)
    {   
        if (is_string($newIdClient)) {
            $this->idClient = $newIdClient;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getIdClient()
    {
        return $this->idClient;
    }


    public function setAdresse($newAdresse)
    {
        if (is_numeric($newAdresse)) {
            $this->adresse = $newAdresse;
        } 
        else {
            trigger_error("Ce n'est pas un chiffre", E_USER_ERROR);
        }
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setCodePostale($newCodePostale)
    {
        if (is_numeric($newCodePostale)) {
            $this->codePostale = $newCodePostale;
        } 
        else {
            trigger_error("Ce n'est pas un chiffre", E_USER_ERROR);
        }
    }

    public function getCodePostale()
    {
        return $this->codePostale;
    }

    public function setVille($newVille)
    {
        if (is_string($newVille)) {
            $this->ville = $newVille;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setPays($newPays)
    {
        if (is_string($newPays)) {
            $this->pays = $newPays;
        } 
        else {
            trigger_error("Ce n'est pas un mot", E_USER_ERROR);
        }
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setTelephone($newTelephone)
    {
        if (is_numeric($newTelephone)) {
            $this->telephone = $newTelephone;
        } 
        else {
            trigger_error("Ce n'est pas un chiffre", E_USER_ERROR);
        }
    }

    public function getTelephone()
    {
        return $this->telephone;
    }
}