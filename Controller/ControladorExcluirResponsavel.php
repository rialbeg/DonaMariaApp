<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Responsavel.php";
class ControladorExcluirResponsavel implements IControlador{

    private $responsavel;

    public function __construct(){
        $this->responsavel = new Responsavel();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        //receber os dados do formulario e setar o objeto
        $this->responsavel->setIdResponsavel($_POST['id']);

        $this->responsavel->excluirResponsavel();
    
        header('Location:admindash', true,302);
        

        // print("<pre>".print_r($_POST,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>