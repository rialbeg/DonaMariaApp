<?php

require_once 'config.php';
class Conexao{
    public static function getConexao(){
        $servername = MYSQL_HOST; 
        $username = MYSQL_USER;
        $password = MYSQL_PASSWORD;
        $dbname = MYSQL_DB_NAME;

        try {
           $minhaConexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
           // set the PDO error mode to exception
           $minhaConexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $minhaConexao;
        }
        catch(PDOException $e) {
         echo "entrou no catch".$e->getmessage();
         return null;
       }
    }

}
?>