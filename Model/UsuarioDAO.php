<?php 

    require 'Conexao.php';
    class UsuarioDAO{

        private $UsuarioModel;

        public function buscarUsuario($user){
            try{
                $conn = Conexao::getConexao();
                $sql = "SELECT userlogin,senha,nivelacesso FROM `usuario` WHERE userlogin = :userlogin";

                $stmt = $conn->prepare($sql);
                $userlogin = $user->getUserLogin();
                $stmt->bindParam('userlogin',$userlogin);
                $stmt->execute();

                return $stmt->fetch(PDO::FETCH_ASSOC);
                print("<pre>".print_r($result,true)."</pre>");
            }catch(PDOException $e){
                echo $e->getMessage();
                return null;
            }
        }
        public function fazerLogin($user){
            $result = $this->buscarUsuario($user);
            if($result){
                if(password_verify($user->getSenha(), $result['senha']))
                    echo 'usuario autenticado';
                else
                    echo 'erro au autenticar usuario';
                print("<pre>".print_r($user,true)."</pre>");
            }
            else
                echo 'o usuario não está cadastrado';
            print("<pre>".print_r($result,true)."</pre>");
        }
    }