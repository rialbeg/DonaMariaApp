<?php 

    require_once 'Conexao.php';
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
                
            }catch(PDOException $e){
                echo $e->getMessage();
                return null;
            }
        }

        public function fazerLogin($user){
            session_start();
            $result = $this->buscarUsuario($user);
            if($result){
                if(password_verify($user->getSenha(), $result['senha'])){

                    $_SESSION['autenticado'] = true;
                    $_SESSION['nivelacesso'] = $result['nivelacesso'];

                    if(isset($_SESSION['errLogin']))
                        unset($_SESSION['errLogin']);
                    if(isset($_SESSION['errSenha']))
                        unset($_SESSION['errSenha']);
                    
                    switch ($result['nivelacesso']) {
                        case 'A':
                            header('Location:AdminDash', true,302);
                            break;
                        case 'B':
                            header('Location:ResponsavelDash', true,302);
                            break;
                        case 'C':
                            header('Location:AlunoDash', true,302);
                            break;
                    }
                }
                else{
                    $_SESSION['errSenha'] = true;
                    header('Location:Login', true,302);
                }
            }
            else{
                $_SESSION['errLogin'] = true;
                header('Location:Login', true,302);
            }
        }
    }