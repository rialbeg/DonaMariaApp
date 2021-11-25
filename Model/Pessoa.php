<?php 

    abstract class Pessoa{

        private $nome;
        private $telefone;
        private $email;
        private $usuario;
        private $escola;

        

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

        public function getEscola()
        {
            return $this->escola;
        }

        public function setEscola($escola)
        {
            $this->escola = $escola;
        }
    }