<?php
// use TypeDePaiement;

class TypeDePaiement extends Singleton
{
    public function __construct() {
        
    }

    public function insert($data)
    {
        try{
            $res = parent::getInstance()->prepare("INSERT INTO typedepaiement (nom, avreviatioTypeDePaiement) VALUES (?,?)");
            $res->bindParam(1, $data['nom'], PDO::PARAM_STR);
            $res->bindParam(2, $data['avreviatioTypeDePaiement'], PDO::PARAM_STR);
            return $res->execute();
        }catch (Exception $e){
           die("Error TypeDePaiement->typedepaiement() " . $e->getMessage());
        }
    }

    public function update($data)
    {
        try{
            $res = parent::getInstance()->prepare("UPDATE nom = ?, avreviatioTypeDePaiement = ? SET  WHERE idTypeDePaiement = ?");
            $res->bindParam(1, $data['nom'], PDO::PARAM_STR);
            $res->bindParam(2, $data['avreviatioTypeDePaiement'], PDO::PARAM_STR);
            $res->bindParam(3, $data['idTypeDePaiement'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error TypeDePaiement->typedepaiement() " . $e->getMessage());
        }
    }

    public function delete($data)
    {
        try{
            $res = parent::getInstance()->prepare("DELETE typedepaiement WHERE idTypeDePaiement = ?");
            $res->bindParam(1, $data['idTypeDePaiement'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error TypeDePaiement->typedepaiement() " . $e->getMessage());
        }
    }

    public function selectAll($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM typedepaiement");
            $res->execute();
            return $res->fetchAll();
        }catch (Exception $e){
            die("Error TypeDePaiement->typedepaiement() " . $e->getMessage());
        }
    }

    public function selectByidTypeDePaiement($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM typedepaiement WHERE idTypeDePaiement = ? ");
            $res->bindParam(1, $data['idTypeDePaiement'], PDO::PARAM_INT);
            $res->execute();
            return $res->fetch();
        }catch (Exception $e){
            die("Error TypeDePaiement->typedepaiement() " . $e->getMessage());
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
     * 5 criar un metodo select by idTypeDePaiement
     */
}

?>