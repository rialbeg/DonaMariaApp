<?php

    
    // require "Usuario.php";
    require_once "CompraDAO.php";
    class Compra{
        private $idCompra;
        private $id_aluno;
        private $id_produto;
        private $quantidade;
        private $dataHora;

        
        public function __construct(){
            
        }
        public function getIdCompra()
        {
            return $this->idCompra;
        }

        public function setIdCompra($idCompra)
        {
            $this->idCompra = $idCompra;
        }

        public function getId_aluno()
        {
            return $this->id_aluno;
        }

        public function setId_aluno($id_aluno)
        {
            $this->id_aluno = $id_aluno;
        }

        public function getId_produto()
        {
            return $this->id_produto;
        }

        public function setId_produto($id_produto)
        {
            $this->id_produto = $id_produto;
        }

        public function getQuantidade()
        {
            return $this->quantidade;
        }

        public function setQuantidade($quantidade)
        {
            $this->quantidade = $quantidade;
        }

        public function getDataHora()
        {
            return $this->dataHora;
        }

        public function setDataHora($dataHora)
        {
            $this->dataHora = $dataHora;
        }


        public function incluirCompra(){
            $compraDAO = new CompraDAO();
            $compraDAO->incluirCompra($this);
        }

        public function atualizarSaldoAluno($aluno){
            $compraDAO = new CompraDAO();
            $compraDAO->atualizarSaldoAluno($aluno);
        }

        public function pesquisarCompra(){
            $compraDAO = new CompraDAO();
            $compraDAO->pesquisarCompra($this);
        }
    
        public function listarTodasCompras(){
            $compraDAO = new CompraDAO();
            return $compraDAO->listarTodosResponsaveis($this);
        }    



    
    }