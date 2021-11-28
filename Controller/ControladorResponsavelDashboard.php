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
        $this->aluno->setId_responsavel($_SESSION['idusuario']);
        $this->aluno->pesquisarIdResponsavel();
        // $idresponsavel = $this->aluno->getId_responsavel();
        $listaAlunos = $this->aluno->listarTodosAlunos();

        // print("<pre>".print_r($listaAlunos,true)."</pre>");
        // print("<pre>".print_r($_SESSION,true)."</pre>");
        require "View/pages/responsavelDashboard.php";
    }
}
    
    
?>