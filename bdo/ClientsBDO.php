<?php
// use Clients;

class ClientsBDO extends Singleton
{
    public function __construct() {
        
    }

    public function insert($data)
    {
        try{
            $res = parent::getInstance()->prepare("INSERT INTO clients (adresse, codePostale, ville, pays, telephone) VALUES (?,?,?,?,?)");
            $res->bindParam(1, $data['adresse'], PDO::PARAM_STR);
            $res->bindParam(2, $data['codePostale'], PDO::PARAM_STR);
            $res->bindParam(3, $data['ville'], PDO::PARAM_STR);
            $res->bindParam(4, $data['pays'], PDO::PARAM_STR);
            $res->bindParam(5, $data['telephone'], PDO::PARAM_STR);
            return $res->execute();
        }catch (Exception $e){
           die("Error Clients->clients() " . $e->getMessage());
        }
    }

    public function update($data)
    {
        try{
            $res = parent::getInstance()->prepare("UPDATE adresse = ?, codePostale = ?, ville = ?, pays = ?, telephone = ? SET  WHERE idClientsClients = ?");
            $res->bindParam(1, $data['adresse'], PDO::PARAM_STR);
            $res->bindParam(2, $data['codePostale'], PDO::PARAM_STR);
            $res->bindParam(3, $data['ville'], PDO::PARAM_STR);
            $res->bindParam(4, $data['pays'], PDO::PARAM_STR);
            $res->bindParam(6, $data['telephone'], PDO::PARAM_STR);
            $res->bindParam(6, $data['idClients'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error Clients->clients() " . $e->getMessage());
        }
    }

    public function delete($data)
    {
        try{
            $res = parent::getInstance()->prepare("DELETE clients WHERE idClients = ?");
            $res->bindParam(1, $data['idClients'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error Clients->clients() " . $e->getMessage());
        }
    }

    public function selectAll($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM clients");
            $res->execute();
            return $res->fetchAll();
        }catch (Exception $e){
            die("Error Clients->clients() " . $e->getMessage());
        }
    }

    public function selectByidClients($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM clients WHERE idClients = ? ");
            $res->bindParam(1, $data['idClients'], PDO::PARAM_INT);
            $res->execute();
            return $res->fetch();
        }catch (Exception $e){
            die("Error Clients->clients() " . $e->getMessage());
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
     * 5 criar un metodo select by idClients
     */
}

?>