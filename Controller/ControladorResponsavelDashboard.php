<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Responsavel.php";
require_once "Model/Aluno.php";
class ControladorResponsavelDashboard implements IControlador{
    
    public function __construct(){
        $this->responsavel = new Responsavel();
        $this->aluno = new Aluno();
    }

    public function processaRequisicao(){
        Validation::validaSessao();
        $listaAlunos = $this->aluno->listarTodosAlunos();
        require "View/pages/responsavelDashboard.php";
    }
}
    
    
?>