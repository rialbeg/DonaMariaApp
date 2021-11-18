<?php 

    require_once "UsuarioDAO.php";
    class Usuario{
        private $userLogin;
        private $senha;
        private $nivelAcesso;


        public function getUserLogin()
        {
            return $this->userLogin;
        }

        public function setUserLogin($userLogin)
        {
            $this->userLogin = $userLogin;
        }

        public function getNivelAcesso()
        {
            return $this->nivelAcesso;
        }

        public function setNivelAcesso($nivelAcesso)
        {
            $this->nivelAcesso = $nivelAcesso;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function setSenha($senha)
        {
            $this->senha = $senha;
        }
        
        // public function incluirUsuario(){
        //     $usuarioDAO = new UsuarioDAO();
        //     $usuarioDAO->incluirUsuario($this);
        // }
        public function buscarUsuario(){
            $usuarioDAO = new UsuarioDAO();
            $usuarioDAO->buscarUsuario($this);
        }

        public function fazerLogin(){
            $usuarioDAO = new UsuarioDAO();
            $usuarioDAO->fazerLogin($this);
        }

    } 
