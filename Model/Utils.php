<?php

require_once 'Model/Validation.php';
require_once 'Conexao.php';

class Utils{
    public static function getIdEscolaByIdUsuario($id){
        

        try {
            $minhaConexao = Conexao::getConexao();
            
            $sql = "SELECT ID_ESCOLA from USUARIO WHERE IDUSUARIO = :idusuario";
            $stmt = $minhaConexao->prepare($sql);

            $stmt->bindParam('idusuario',$idusuario);
            $idusuario = $id;
            $stmt->execute();
            // print("<pre>".print_r($stmt->fetch(PDO::FETCH_ASSOC),true)."</pre>");
            return $stmt->fetch(PDO::FETCH_ASSOC)['ID_ESCOLA']; 
        }
        catch(PDOException $e) {
         echo "entrou no catch".$e->getmessage();
         return null;
       }
    }

    public static function getIdResponsavelByIdUsuario($id){
        

        try {
            $minhaConexao = Conexao::getConexao();
            
            $sql = "SELECT ID_RESPONSAVEL from USUARIO WHERE IDUSUARIO = :idusuario";
            $stmt = $minhaConexao->prepare($sql);

            $stmt->bindParam('idusuario',$idusuario);
            $idusuario = $id;
            $stmt->execute();
            // print("<pre>".print_r($stmt->fetch(PDO::FETCH_ASSOC),true)."</pre>");
            return $stmt->fetch(PDO::FETCH_ASSOC); 
        }
        catch(PDOException $e) {
         echo "entrou no catch".$e->getmessage();
         return null;
       }
    }

}
?>