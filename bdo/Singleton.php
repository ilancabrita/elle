<?php

class Singleton {

    public static $instance;

    private function __construct() {
        //
    }

    /**
     * Metodo retorno da instancia de banco de dados
     * @return PDO
     */
    public static function getInstance():PDO {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=elle', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return self::$instance;
    }

    /**
     * Método estático que devolve a instancia ativa
     * @param string $file
     * @return PDO
     */
    public static function getInstanceFile(string $file): PDO
    {
        if(self::$instance == NULL) {
            // Receber os donneeDb do file
            self::$instance = self::make(self::load($file));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->exec("set names utf8");
        }
        return self::$instance;
    }

    /**
     * Método estático privado que permite o carregamento do file
     * @param $file string
     * @return array
     */
    private static function load(string $file): array
    {
        // $file = 'subsdiretorio/' .$file.'.ini';
    
        if(file_exists($file)) {
            $donneeDb = parse_ini_file($file);
        } else {
            throw new Exception('Erro: file não encontrado');
        }
        return $donneeDb;
    }

    /**
     * Método montar string de conexao e gerar o objeto PDO
     * @param $donneeDb array
     * @return PDO
     */
    
    private static function make(array $donneeDb): PDO
    {
        // capturar donneeDb
        $sgdb     = isset($donneeDb['sgdb']) ? $donneeDb['sgdb'] : NULL;
        $user  = isset($donneeDb['user']) ? $donneeDb['user'] : NULL;
        $password    = isset($donneeDb['password']) ? $donneeDb['password'] : NULL;
        $database    = isset($donneeDb['database']) ? $donneeDb['database'] : NULL;
        $server = isset($donneeDb['server']) ? $donneeDb['server'] : NULL;
        $port    = isset($donneeDb['port']) ? $donneeDb['port'] : NULL;
    
        if(!is_null($sgdb)) {
            // selecionar database - criar string de conexão
            switch (strtoupper($sgdb)) {
                case 'MYSQL' : $port = isset($port) ? $port : 3306 ;
                    return new PDO("mysql:host={$server};port={$port};dbname={$database}", $user, $password);
                    break;
                case 'MSSQL' : $port = isset($port) ? $port : 1433 ;
                    return new PDO("mssql:host={$server},{$port};dbname={$database}", $user, $password);
                    break;
                case 'PGSQL' : $port = isset($port) ? $port : 5432 ;
                    return new PDO("pgsql:dbname={$database}; user={$user}; password={$password}, host={$server};port={$port}");
                    break;
                case 'SQLITE' : 
                    return new PDO("sqlite:{$database}");
                    break;
                case 'OCI8' : 
                    return new PDO("oci:dbname={$database}", $user, $password);
                    break;
                case 'FIREBIRD' : 
                    return new PDO("firebird:dbname={$database}",$user, $password);
                    break;
            }
        } else {
            throw new Exception('Erro: tipo de database de donneeDb não informado');
        }
    }

}
