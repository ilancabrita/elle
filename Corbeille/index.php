<?php

$con = Singleton::getInstanceFile('./configdb.ini');
 
echo (is_a($con, PDO::class))?'Instanciado com êxito' :'Não deu certo!';

?>