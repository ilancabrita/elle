<?php
// use Prix;
require_once 'Singleton.php';
class PrixBDO extends Singleton
{
    public function __construct() {
        
    }

    public function insert($data)
    {
        try{
            $res = parent::getInstance()->prepare("INSERT INTO prix (prix, commantaire) VALUES (?,?)");
            $res->bindParam(1, $data['prix'], PDO::PARAM_STR);
            $res->bindParam(2, $data['commantaire'], PDO::PARAM_STR);
            return $res->execute();
        }catch (Exception $e){
           die("Error Prix->prix() " . $e->getMessage());
        }
    }

    public function update($data)
    {
        try{
            $res = parent::getInstance()->prepare("UPDATE prix = ?, commantaire = ? SET  WHERE idPrix = ?");
            $res->bindParam(1, $data['prix'], PDO::PARAM_STR);
            $res->bindParam(2, $data['commantaire'], PDO::PARAM_STR);
            $res->bindParam(3, $data['idPrix'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error Prix->prix() " . $e->getMessage());
        }
    }

    public function delete($data)
    {
        try{
            $res = parent::getInstance()->prepare("DELETE prix WHERE idPrix = ?");
            $res->bindParam(1, $data['idPrix'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error Prix->prix() " . $e->getMessage());
        }
    }

    public function selectAll($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM prix");
            $res->execute();
            return $res->fetchAll();
        }catch (Exception $e){
            die("Error Prix->prix() " . $e->getMessage());
        }
    }

    public function selectByidPrix($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM prix WHERE idPrix = ? ");
            $res->bindParam(1, $data['idPrix'], PDO::PARAM_INT);
            $res->execute();
            return $res->fetch();
        }catch (Exception $e){
            die("Error Prix->prix() " . $e->getMessage());
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
     * 5 criar un metodo select by idPrix
     */
}

?>