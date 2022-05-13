<?php

//use PDO;
//use ConnectionBDO;
class TestConnectionBDD extends UserBDO
{

    private function __construct() {

    }

    // require_once 'Singleton.php';
    // Connection
    public function insert($data)
    {
        parent::insert($data);
        
    }

    public function update($data)
    {

    }

    public function delete($data)
    {

    }

    public function selectAll($data)
    {

    }

    public function selectById($data)
    {

    }
  
    public function test()
    {
        //parent::test();
        echo "fonctionne";
    }
}


?>