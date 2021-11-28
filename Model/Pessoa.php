<?php 

    require_once "Usuario.php";
    abstract class Pessoa{

        private $nome;
        private $telefone;
        private $email;
        private $usuario;
        private $id_escola;

        public function __construct(){
            $this->usuario = new Usuario();
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

        public function getUsuario()
        {
            return $this->usuario;
        }

        public function setUsuario($usuario)
        {
            $this->usuario = $usuario;
        }

        public function getId_escola()
        {
            return $this->id_escola;
        }

        public function setId_escola($id_escola)
        {
            $this->id_escola = $id_escola;
            return $this;
        }
    }