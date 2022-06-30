<?php
// require_once 'User.class.php';
class Prestataire extends User
{
    private $idPrestataire;
    private $jourDeTravail;
    private $horaireDeTravail;


    public function __construct($idPrestataire, $jourDeTravail, $horaireDeTravail)
    {
        echo "Instanciation.......";
        $this->setIdPrestataire($idPrestataire);
        $this->setJourDeTravail($jourDeTravail);
        $this->setHoraireDeTravail($horaireDeTravail);
    }

    public function setIdPrestataire($newIdPrestataire)
    {   
        if (is_string($newIdPrestataire)) {
            $this->idPprestataire = $newIdPrestataire;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getIdPrestataire()
    {
        return $this->idPrestataire;
    }

    public function setJourDeTravail($newJourDeTravail)
    {   
        if (is_string($newJourDeTravail)) {
            $this->jourDeTravail = $newJourDeTravail;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getJourDeTravail()
    {
        return $this->jourDeTravail;
    }

    public function setHoraireDeTravail($newHoraireDeTravail)
    {
        if (is_numeric($newHoraireDeTravail) && iconv_strlen($newHoraireDeTravail)) {
            $this->horaireDeTravail = $newHoraireDeTravail;
        } 
        else {
            trigger_error("Ce n'est pas un chiffre", E_USER_ERROR);
        }
    }

    public function getHoraireDeTravail()
    {
        return $this->horaireDeTravail;
    }
}

// $pretataire = new Prestataire(0, 'lundi', 'de 9h à 19h');
// echo "<br>";
// echo $prestataire->getJourDeTravail();