<?php

//use PDO;
//use Singleton;
class TestConnectionBDD extends ConnectionBDO
{
    // require_once 'Singleton.php';
    // Connection
    public function insert($data)
    {
        try 
        {
            $con = Singleton::getInstanceFile('./configdb.ini');
        
            echo (is_a($con, PDO::class))?'Instanciado com êxito' :'Não deu certo!';

            $pdo = new PDO('mysql:host=localhost;dbname=elle', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } 
        catch (PDOException $e) 
        {
            echo "Erruer avec la base de donées: ".$e->getMessage();
        }
        catch (Exception $e)
        {
            echo "Erreur générique: ".$e->getMessage();
        }

        // Insertion
        // 1 option
        $res = $pdo->prepare("INSERT INTO connection(email, identifiant, motDePasse) VALUES (:e, :i, :m)");

        $res->bindValue(":e","ilan.cabrita@gmail.com");
        $res->bindValue(":i","Luis");
        $res->bindValue(":m","1998.Ilan");
        $res->execute();

        // Supprimer et Mis à jour

        $cmd = $pdo->prepare("DELETE FROM connection WHERE id = :id");
        $id = 2;
        $cmd->bindValue(":id",$id);
        $cmd->execute();

        $cmd = $pdo->prepare("UPDATE connection SET email = :e WHERE id = :id");
        $cmd->bindValue(":e", 'ilan.cours.ecole@gmail.com');
        $cmd->bindValue(":id",3);
        $cmd->execute();

        // Select

        $cmd = $pdo->prepare("SELECT * FROM connection WHERE id = :id");
        $cmd->bindValue(":id", 4);
        $cmd->execute();
        $resultat = $cmd->fetch(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($resultat);
        echo "</pre>";

        // foreach ($resultat as $key => $value)
        // {
        //     echo $key.": ".$value."<br>";
        // }
    }
    

    
}


?>