<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Responsavel.php";
class ControladorFormAlterarResponsavel implements IControlador{

    private $responsavel;

    public function __construct(){
        $this->responsavel = new Responsavel();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $this->responsavel->setIdResponsavel($_POST['id']);
        
        $this->responsavel->pesquisarResponsavel();
        $idResponsavel = $this->responsavel->getIdResponsavel();
        $nome = $this->responsavel->getNome();
        $cpf = $this->responsavel->getCpf();
        $email = $this->responsavel->getEmail();
        $telefone = $this->responsavel->getTelefone();
        $userlogin = $this->responsavel->getUsuario()->getUserLogin();
        $nivelacesso = $this->responsavel->getUsuario()->getNivelacesso();
        require "View/pages/alterar_responsavel.php";
        
        // print("<pre>".print_r($_POST,true)."</pre>");
        // print("<pre>".print_r($this->responsavel,true)."</pre>");
        // $vars = get_defined_vars();
        // print("<pre>".print_r($vars,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>