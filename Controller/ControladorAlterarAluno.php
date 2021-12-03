<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Aluno.php";
class ControladorAlterarAluno implements IControlador{

    private $aluno;

    public function __construct(){
        $this->aluno = new Aluno();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $this->aluno->setIdAluno($_POST['idaluno']);
        $this->aluno->setNome($_POST['nome']);
        $this->aluno->setMatricula($_POST['matricula']);
        $this->aluno->setTurma($_POST['turma']);
        $this->aluno->setTurno($_POST['turno']);
        $this->aluno->setTelefone($_POST['telefone']);
        $this->aluno->setEmail($_POST['email']);
        $this->aluno->getUsuario()->setUserLogin($_POST['userlogin']);
        $this->aluno->getUsuario()->setSenha($_POST['senha']);
        

        $this->aluno->alterarAluno();
        
        header('Location:admindash',true,302);
        // print("<pre>".print_r($this->aluno,true)."</pre>");
        // print("<pre>".print_r($_POST,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>