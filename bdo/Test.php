<?php

class Test{
    private function __construct() {
        $con = Singleton::getInstanceFile('./configdb.ini');
 
        echo (is_a($con, PDO::class))?'Instanciado com êxito' :'Não deu certo!';
 
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