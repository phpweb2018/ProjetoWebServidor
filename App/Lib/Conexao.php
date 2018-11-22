<?php

namespace App\Lib;

use PDO;
use PDOException;
use Exception;

class Conexao
{
    private static $connection;

    private function __construct(){}

    public static function getConnection() {

        $pdoConfig  = DB_DRIVER . ":". "host=" . DB_HOST . ";";
        $pdoConfig .= "dbname=".DB_NAME.";";
        
        
        //$bd = "pgsql:"
        //	    . "host=ec2-54-83-50-145.compute-1.amazonaws.com;"
	//	    . "dbname=d1j91br7qn9g5i;"
	//	    . "user=vasysywxnlwooi;"
	//	    . "port=5432;"
	//	    . "sslmode=require;"
	//	    . "password=2919bf6469b71cab763a5e1990cad2de481927ecb7614c9577e899e811d774a6";


        try { 
            if(!isset(self::$connection)){
                self::$connection =  new PDO($pdoConfig, DB_USER, DB_PASSWORD);
                //self::$connection =  new PDO($bd);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$connection;
        } catch (PDOException $e) {
            throw new Exception("Erro de conexão com o banco de dados",500);
        }
    }
}
