<?php

    require "Pessoa.php";
    // require "Usuario.php";
    require "ResponsavelDAO.php";
    class Responsavel extends Pessoa{
        private $idResponsavel;
        private $cpf;
        private $filhos;

        
        public function __construct(){
            Parent::__construct();
            // Parent::setUsuario(new Usuario());
        }
        public function getIdResponsavel()
        {
            return $this->idResponsavel;
        }

        public function setIdResponsavel($idResponsavel)
        {
            $this->idResponsavel = $idResponsavel;
        }
        public function getCpf()
        {
            return $this->cpf;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }


        public function incluirResponsavel(){
            $responsavelDAO = new ResponsavelDAO();
            $responsavelDAO->incluirResponsavel($this);
        }

        public function excluirResponsavel(){
            $responsavelDAO = new ResponsavelDAO();
            $responsavelDAO->excluirResponsavel($this);
        }
    
        public function pesquisarResponsavel(){
            $responsavelDAO = new ResponsavelDAO();
            $responsavelDAO->pesquisarResponsavel($this);
        }
    
        public function alterarResponsavel(){
            $responsavelDAO = new ResponsavelDAO();
            $responsavelDAO->alterarResponsavel($this);
        }
    
        public function listarTodosResponsaveis(){
            $responsavelDAO = new ResponsavelDAO();
            return $responsavelDAO->listarTodosResponsaveis();
        }    


    }