<?php
// use Categories;

class Categories extends Singleton
{
    private function __construct() {
        
    }

    public function insert($data)
    {
        try{
            $res = parent::getInstance()->prepare("INSERT INTO categories (categories, commentaire) VALUES (?,?)");
            $res->bindParam(1, $data['categories'], PDO::PARAM_STR);
            $res->bindParam(2, $data['commentaire'], PDO::PARAM_STR);
            return $res->execute();
        }catch (Exception $e){
           die("Error Categories->categories() " . $e->getMessage());
        }
    }

    public function update($data)
    {
        try{
            $res = parent::getInstance()->prepare("UPDATE categories = ?, commentaire = ? SET  WHERE id = ?");
            $res->bindParam(1, $data['categories'], PDO::PARAM_STR);
            $res->bindParam(2, $data['commentaire'], PDO::PARAM_STR);
            $res->bindParam(3, $data['id'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error Categories->categories() " . $e->getMessage());
        }
    }

    public function delete($data)
    {
        try{
            $res = parent::getInstance()->prepare("DELETE categories WHERE id = ?");
            $res->bindParam(1, $data['id'], PDO::PARAM_INT);
            return $res->execute();
        }catch (Exception $e){
            die("Error Categories->categories() " . $e->getMessage());
        }
    }

    public function selectAll($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM categories");
            $res->execute();
            return $res->fetchAll();
        }catch (Exception $e){
            die("Error Categories->categories() " . $e->getMessage());
        }
    }

    public function selectById($data)
    {
        try{
            $res = parent::getInstance()->prepare("SELECT * FROM categories WHERE id = ? ");
            $res->bindParam(1, $data['id'], PDO::PARAM_INT);
            $res->execute();
            return $res->fetch();
        }catch (Exception $e){
            die("Error Categories->categories() " . $e->getMessage());
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
     * 5 criar un metodo select by id
     */
}

?>