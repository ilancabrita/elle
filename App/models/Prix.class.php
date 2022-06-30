<?php
// require_once'Services.class.php';
class Prix extends Services
{
    private $idPrix;
    private $prix;
    private $commentaire;

    public function __construct($idPrix, $prix, $commentaire)
    {
        echo "Instanciation.......";
        $this->setIdPrix($idPrix);
        $this->setPrix($prix);
        $this->setCommentaire($commentaire);
    }

    public function setIdPrix($newIdPrix)
    {   
        if (is_string($newIdPrix)) {
            $this->idPrix = $newIdPrix;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getIdPrix()
    {
        return $this->idPrix;
    }

    public function setPrix($newPrix)
    {   
        if (is_numeric($newPrix)) {
            $this->prix = $newPrix;
        } 
        else {
            trigger_error("C'est un chiffre", E_USER_ERROR);
        }
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setCommentaire($newCommentaire)
    {
        if (is_string($newCommentaire)) {
            $this->commentaire = $newCommentaire;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getCommentaire()
    {
        return $this->commentaire;
    }
}

$prix = new Prix(0, 'lundi', 'de 9h à 19h');
echo "<br>";
echo $prix->getPrix();