<?php

class User
{
    private $id;
    private $email;
    private $identifiant;
    private $motDePasse;

    public function __construct($id, $email, $identifiant, $motDePasse)
    {
        echo "Instanciation.......";
        $this->setId($id);
        $this->setEmail($email);
        $this->setIdentifiant($identifiant);
        $this->setMotDePasse($motDePasse);
    }

    public function __construct($email, $identifiant, $motDePasse)
    {
        echo "Instanciation.......";
        $this->setEmail($email);
        $this->setIdentifiant($identifiant);
        $this->setMotDePasse($motDePasse);
    }

    public function setId($newid)
    {   
        if (is_string($newid)) {
            $this->id = $newrid;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPrenom($newPrenom)
    {   
        if (is_string($newPrenom) && iconv_strlen($newPrenom) <= 20) {
            $this->prenom = $newPrenom;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setIdentifiant($newIdentifiant)
    {   
        if (is_string($newIdentifiant)) {
            $this->identifiant = $newIdentifiant;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getIdentifient()
    {
        return $this->identifiant;
    }

    public function setMotDePasse($newMotDePasse)
    {
        if (is_numeric($newMotDePasse) && iconv_strlen($newMotDePasse)) {
            $this->motDePasse = $newMotDePasse;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    public function setPrenom($newPrenom)
    {   
        if (is_string($newPrenom) && iconv_strlen($newPrenom) <= 20) {
            $this->prenom = $newPrenom;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setEmail($newEmail)
    {   
        if (is_string($newEmail)) {
            $this->email = $newEmail;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

}

