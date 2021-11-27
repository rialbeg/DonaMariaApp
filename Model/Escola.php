<?php 

    require_once "Usuario.php";
    class Escola{
        private $isEscola;
        private $nome;
        private $telefone;
        private $email;
        private $usuario;


        public function __construct(){
            $this->usuario = new Usuario();
        }
        
        public function getIsEscola()
        {
            return $this->isEscola;
        }

        public function setIsEscola($isEscola)
        {
            $this->isEscola = $isEscola;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }
    }