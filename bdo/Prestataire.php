<?php
// use Pretataire;

class Prastataire extends Singleton
{
    public function __construct() {
        
    }

    public function insert($data)
    {
        try{
            $res = parent::getInstance()->prepare("INSERT INTO prestataire (jourDeTravail, horaireDeTravail) VALUES (?,?)");
            $res->bindParam(1, $data['jourDeTravail'], PDO::PARAM_STR);
            $res->bindParam(2, $data['horaireDeTravail'], PDO::PARAM_STR);
            return $res->execute();
        }catch (Exception $e){
           die("Error Prestataire->prestataire() " . $e->getMessage());
        }
    }

    public function update($data)
    {
        try{
            $res = parent::getInstance()->prepare("UPDATE jourDeTravail = ?, horaireDeTravail = ? SET  WHERE idPrestataire = ?");
            $res->bindParam(1, $data['jourDeTravail'], PDO::PARAM_STR);
            $res->bindParam(2, $data['horaireDeTravail'], PDO::PARAM_STR);
            $res->bindParam(3, $data['idPrestataire'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error Prestataire->prestataire() " . $e->getMessage());
        }
    }

    public function delete($data)
    {
        try{
            $res = parent::getInstance()->prepare("DELETE prestataire WHERE idPrestataire = ?");
            $res->bindParam(1, $data['idPrestataire'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error Prestataire->prestataire() " . $e->getMessage());
        }
    }

    public function selectAll($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM prestataire");
            $res->execute();
            return $res->fetchAll();
        }catch (Exception $e){
            die("Error Prestataire->prestataire() " . $e->getMessage());
        }
    }

    public function selectByidPrestataire($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM prestataire WHERE idPrestataire = ? ");
            $res->bindParam(1, $data['idPrestataire'], PDO::PARAM_INT);
            $res->execute();
            return $res->fetch();
        }catch (Exception $e){
            die("Error Prestataire->prestataire() " . $e->getMessage());
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
     * 5 criar un metodo select by idPrestataire
     */
}

?>