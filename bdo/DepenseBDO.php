<?php
// use Depense;
require_once 'Singleton.php';
class DepenseBDO extends Singleton
{
    public function __construct() {
        
    }

    public function insert($data)
    {
        try{
            $res = parent::getInstance()->prepare("INSERT INTO depense (depense, date, description, lieux, valeur, typeDePaiement) VALUES (?,?,?,?,?,?)");
            $res->bindParam(1, $data['depense'], PDO::PARAM_STR);
            $res->bindParam(2, $data['date'], PDO::PARAM_STR);
            $res->bindParam(3, $data['description'], PDO::PARAM_STR);
            $res->bindParam(4, $data['lieux'], PDO::PARAM_STR);
            $res->bindParam(5, $data['valeur'], PDO::PARAM_STR);
            $res->bindParam(6, $data['typeDePaiement'], PDO::PARAM_STR);
            return $res->execute();
        }catch (Exception $e){
           die("Error User->depense() " . $e->getMessage());
        }
    }

    public function update($data)
    {
        try{
            $res = parent::getInstance()->prepare("UPDATE depense = ?, date = ?, description = ?, lieux = ?, valeur = ?, typeDePaiement = ? SET  WHERE idDepense = ?");
            $res->bindParam(1, $data['depense'], PDO::PARAM_STR);
            $res->bindParam(2, $data['date'], PDO::PARAM_STR);
            $res->bindParam(3, $data['description'], PDO::PARAM_STR);
            $res->bindParam(4, $data['lieux'], PDO::PARAM_STR);
            $res->bindParam(5, $data['valeur'], PDO::PARAM_STR);
            $res->bindParam(6, $data['typeDePaiement'], PDO::PARAM_STR);
            $res->bindParam(7, $data['idDepense'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error User->depense() " . $e->getMessage());
        }
    }

    public function delete($data)
    {
        try{
            $res = parent::getInstance()->prepare("DELETE depense WHERE idDepense = ?");
            $res->bindParam(1, $data['idDepense'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error User->depense() " . $e->getMessage());
        }
    }

    public function selectAll($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM depense");
            $res->execute();
            return $res->fetchAll();
        }catch (Exception $e){
            die("Error User->depense() " . $e->getMessage());
        }
    }

    public function selectByidDepense($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM depense WHERE idDepense = ? ");
            $res->bindParam(1, $data['idDepense'], PDO::PARAM_INT);
            $res->execute();
            return $res->fetch();
        }catch (Exception $e){
            die("Error User->depense() " . $e->getMessage());
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
     * 5 criar un metodo select by idDepense
     */
}

?>