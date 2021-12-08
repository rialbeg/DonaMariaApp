<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Aluno.php";
class ControladorFormDepositoAluno implements IControlador{

    private $aluno;

    public function __construct(){
        $this->aluno = new Aluno();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $idaluno = $_POST['id'];
        // print("<pre>".print_r($_POST,true)."</pre>");
        require "View/pages/deposito_aluno.php";
        
        // print("<pre>".print_r($this->aluno,true)."</pre>");
        // $vars = get_defined_vars();
        // print("<pre>".print_r($vars,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>