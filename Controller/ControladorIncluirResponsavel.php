<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Responsavel.php";
require_once "Model/Escola.php";
class ControladorIncluirResponsavel implements IControlador{

    private $responsavel;
    private $escola;

    public function __construct(){
        $this->responsavel = new Responsavel();
        $this->escola = new Escola();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();

        $this->responsavel->setNome($_POST["nome"]);
        $this->responsavel->setEmail($_POST["email"]);
        $this->responsavel->getUsuario()->setUserLogin($_POST["login"]);
        $this->responsavel->setCpf($_POST["cpf"]);
        $this->responsavel->setTelefone($_POST["telefone"]);
        $this->responsavel->getUsuario()->setSenha($_POST["senha"]);
        $this->responsavel->getUsuario()->setNivelAcesso("B");
        $this->responsavel->setId_escola($_SESSION['idusuario']);
        $this->responsavel->incluirResponsavel();

        header('Location:admindash', true,302);
        // print("<pre>".print_r($_POST,true)."</pre>");
        // print("<pre>".print_r($_SESSION,true)."</pre>");
        // print("<pre>".print_r($this->responsavel,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>