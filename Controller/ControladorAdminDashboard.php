<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Produto.php";
require_once "Model/Responsavel.php";
require_once "Model/Aluno.php";
require_once "Model/Utils.php";

class ControladorAdminDashboard implements IControlador{

    private $produto;
    private $responsavel;
    private $aluno;
    public function __construct(){
        $this->produto = new Produto();
        $this->responsavel = new Responsavel();
        $this->aluno = new Aluno();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $id_escola = Utils::getIdEscolaByIdUsuario($_SESSION['idusuario']);
        $this->responsavel->setId_escola($id_escola);
        
        $this->aluno->setId_escola($id_escola);
    
        $listaProdutos = $this->produto->listarTodosProdutos();
        $listaResponsaveis = $this->responsavel->listarTodosResponsaveis();
        $listaAlunos = $this->aluno->listarTodosAlunosPorEscola();

        // print("<pre>".print_r($_SESSION,true)."</pre>");
        require "View/pages/adminDashboard.php";
    }
}
    
    
?>