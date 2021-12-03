<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Aluno.php";
class ControladorFormAlterarAluno implements IControlador{

    private $aluno;

    public function __construct(){
        $this->aluno = new Aluno();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $this->aluno->setIdAluno($_POST['id']);
        
        $this->aluno->pesquisarAluno();
        $idAluno = $this->aluno->getIdAluno();
        $nome = $this->aluno->getNome();
        $matricula = $this->aluno->getMatricula();
        $turma = $this->aluno->getTurma();
        $turno = $this->aluno->getTurno();
        $telefone = $this->aluno->getTelefone();
        $email = $this->aluno->getEmail();
        $userlogin = $this->aluno->getUsuario()->getUserLogin();
        $nivelacesso = $this->aluno->getUsuario()->getNivelacesso();
        require "View/pages/alterar_aluno.php";
        
        // print("<pre>".print_r($_POST,true)."</pre>");
        // print("<pre>".print_r($this->aluno,true)."</pre>");
        // $vars = get_defined_vars();
        // print("<pre>".print_r($vars,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>