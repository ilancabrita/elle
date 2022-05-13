<?php
// use Service;
require_once 'Singleton.php';
class ServicesBDO extends Singleton
{
    public function __construct() {
        
    }

    public function insert($data)
    {
        try{
            $res = parent::getInstance()->prepare("INSERT INTO services (services, commentaire) VALUES (?,?)");
            $res->bindParam(1, $data['services'], PDO::PARAM_STR);
            $res->bindParam(3, $data['commentaire'], PDO::PARAM_STR);
            return $res->execute();
        }catch (Exception $e){
           die("Error Service->services() " . $e->getMessage());
        }
    }

    public function update($data)
    {
        try{
            $res = parent::getInstance()->prepare("UPDATE services = ?, commentaire = ? SET  WHERE idService = ?");
            $res->bindParam(1, $data['services'], PDO::PARAM_STR);
            $res->bindParam(2, $data['commentaire'], PDO::PARAM_STR);
            $res->bindParam(3, $data['idService'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error Service->services() " . $e->getMessage());
        }
    }

    public function delete($data)
    {
        try{
            $res = parent::getInstance()->prepare("DELETE services WHERE idServices = ?");
            $res->bindParam(1, $data['idServices'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error Service->services() " . $e->getMessage());
        }
    }

    public function selectAll($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM services");
            $res->execute();
            return $res->fetchAll();
        }catch (Exception $e){
            die("Error Service->services() " . $e->getMessage());
        }
    }

    public function selectByidServices($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM services WHERE idServices = ? ");
            $res->bindParam(1, $data['idServices'], PDO::PARAM_INT);
            $res->execute();
            return $res->fetch();
        }catch (Exception $e){
            die("Error Service->services() " . $e->getMessage());
        }
    }

    public function test()
    {
        echo "fonctionne";
    }

    /**
     * TODO:
     * 1 criar un metodo inserir
     * 2 criar un metodo update
     * 3 criar un metodo delete
     * 4 criar un metodo select all
     * 5 criar un metodo select by idServices
     */
}

?>