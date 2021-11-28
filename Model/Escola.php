<?php 

    require_once "Usuario.php";
    require_once "EscolaDAO.php";
    class Escola{
        private $idEscola;
        private $nome;
        private $telefone;
        private $email;
        private $usuario;


        public function __construct(){
            $this->usuario = new Usuario();
        }
        
        public function getIdEscola()
        {
            return $this->idEscola;
        }

        public function setIdEscola($idEscola)
        {
            $this->idEscola = $idEscola;
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