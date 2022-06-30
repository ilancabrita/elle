<?php

class User
{
    private $id;
    private $prenom;
    private $email;
    private $identifiant;
    private $motDePasse;

    public function __construct($id, $prenom, $email, $identifiant, $motDePasse)
    {
        echo "Instanciation.......";
        $this->setId($id);
        $this->setPrenom($prenom);
        $this->setEmail($email);
        $this->setIdentifiant($identifiant);
        $this->setMotDePasse($motDePasse);
    }

    public function setId($newId)
    {   
        if (is_string($newId)) {
            $this->id = $newId;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setEmail($newEmail)
    {   
        if (is_string($newEmail) && iconv_strlen($newEmail) <= 20) {
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
}

// $user = new User(0, 'Ilan', 'ilan335511@gmail.com', 'IlanC', '1234');
// echo "<br>";
// echo $user->getEmail();