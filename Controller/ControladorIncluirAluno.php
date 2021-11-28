<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Aluno.php";
class ControladorIncluirAluno implements IControlador{

    private $aluno;

    public function __construct(){
        $this->aluno = new Aluno();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $this->aluno->setNome($_POST["nome"]);
        $this->aluno->setTurma($_POST["turma"]);
        $this->aluno->setMatricula($_POST["matricula"]);
        $this->aluno->setEmail($_POST["email"] ? $_POST["email"]:NULL);
        $this->aluno->setTelefone($_POST["telefone"] ? $_POST["telefone"]:NULL);
        $this->aluno->setTurno($_POST["turno"]);
        $this->aluno->setSaldo(0.00);
        $this->aluno->getUsuario()->setNivelAcesso("C");
        $this->aluno->getUsuario()->setUserLogin($_POST["login"]);
        $this->aluno->getUsuario()->setSenha($_POST["senha"]);
        $this->aluno->setId_responsavel($_SESSION['idusuario']);

        $this->aluno->pesquisarIdResponsavel();
        $this->aluno->incluirAluno();

        header('Location:admindash', true,302);
        // print("<pre>".print_r($_POST,true)."</pre>");
        // print("<pre>".print_r($_SESSION,true)."</pre>");
        // print("<pre>".print_r($this->aluno,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>