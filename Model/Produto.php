<?php 

    require "ProdutoDAO.php";
    class Produto{
        private $idProduto;
        private $codigo;
        private $tipo;
        private $nome;
        private $caminhoImagem;
        private $fornecedor;
        private $preco;


        public function getIdProduto()
        {
            return $this->idProduto;
        }

        public function setIdProduto($idProduto)
        {
            $this->idProduto = $idProduto;
        }
        public function getCodigo()
        {
            return $this->codigo;
        }

        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getCaminhoImagem()
        {
            return $this->caminhoImagem;
        }

        public function setCaminhoImagem($caminhoImagem)
        {
            $this->caminhoImagem = $caminhoImagem;
        }

        public function getFornecedor()
        {
            return $this->fornecedor;
        }

        public function setFornecedor($fornecedor)
        {
            $this->fornecedor = $fornecedor;
        }

        public function getPreco()
        {
            return $this->preco;
        }

        public function setPreco($preco)
        {
            $this->preco = $preco;
        }

        public function listarTodosProdutos(){
            $produtoDAO = new ProdutoDAO();
            return $produtoDAO->listarTodosProdutos($this);
        }
        public function buscarIngredientePorID(){
            $produtoDAO = new ProdutoDAO();
            return $produtoDAO->buscarIngredientePorID($this->getIdProduto());
        }

    
    }