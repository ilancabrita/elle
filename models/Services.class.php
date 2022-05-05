<?php

class Services extends Categories
{
    private $idService;
    private $service;
    private $commentaire;

    public function __construct($idService, $service, $commentaire)
    {
        echo "Instanciation.......";
        $this->setIdService($idService);
        $this->setService($service);
        $this->setCommentaire($commentaire);
    }

    public function __construct($service, $commentaire)
    {
        echo "Instanciation.......";
        $this->setService($service);
        $this->setCommentaire($commentaire);
    }

    public function setIdService($newIdService)
    {   
        if (is_string($newIdService)) {
            $this->idService = $newIdService;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getIdService()
    {
        return $this->idService;
    }

    public function setService($newService)
    {   
        if (is_string($newService)) {
            $this->service = $newService;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getService()
    {
        return $this->service;
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