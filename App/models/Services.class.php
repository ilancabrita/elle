<?php
// require_once 'Categories.class.php';
class Services extends Categories
{
    private $idService;
    private $service;
    private $commentaire;
    private $categories;

    public function __construct($idService, $service, $commentaire, $categories)
    {
        echo "Instanciation.......";
        $this->setIdService($idService);
        $this->setService($service);
        $this->setCommentaire($commentaire);
        $this->setCategories($categories);
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

    public function setCategories ($newCategories)
    {
        if (is_string($newCategories)) {
            $this->categories = $newCategories;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    } 

    public function getCategories()
    {
        return $this->categories;
    }
}

$services = new Services(0, 'test', 'hahah',);
echo "<br>";
echo $categorie->getService();