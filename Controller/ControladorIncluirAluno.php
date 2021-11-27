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
        // $this->aluno->setNome($_POST["nome"]);
        // $this->aluno->setEmail($_POST["email"]);
        // $this->aluno->getUsuario()->setUserLogin($_POST["login"]);
        // $this->aluno->setCpf($_POST["cpf"]);
        // $this->aluno->setTelefone($_POST["telefone"]);
        // $this->aluno->getUsuario()->setSenha($_POST["senha"]);
        // $this->aluno->getUsuario()->setNivelAcesso("B");

        // $this->responsavel->incluirAluno();

        // header('Location:admindash', true,302);
        print("<pre>".print_r($_POST,true)."</pre>");
        print("<pre>".print_r($this->aluno,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>