<?php

class Categories
{
    private $id;
    private $categorie;
    private $commentaire;

    public function __construct($id, $categorie, $commentaire)
    {
        echo "Instanciation.......";
        $this->setId($id);
        $this->setCategorie($categorie);
        $this->setCommentaire($commentaire);
    }

    public function __construct($categorie, $commentaire)
    {
        echo "Instanciation.......";
        $this->setCategorie($categorie);
        $this->setCommentaire($commentaire);
    }

    public function setId($newId)
    {   
        if (is_string($newId)) {
            $this->id = $newrId;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCategorie($newCategorie)
    {   
        if (is_string($newCategorie)) {
            $this->categorie = $newCategorie;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getCategorie()
    {
        return $this->categorie;
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