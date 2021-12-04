<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Aluno.php";
class ControladorDepositoAluno implements IControlador{

    private $aluno;

    public function __construct(){
        $this->aluno = new Aluno();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $this->aluno->setIdAluno($_POST["idaluno"]);
        $this->aluno->setSaldo(number_format((float)$_POST['deposito'], 2, '.', ''));
        
        $this->aluno->depositarAluno();
        header('Location:responsaveldash', true,302);
        print("<pre>".print_r($_POST,true)."</pre>");
        // echo gettype(floatval($_POST['deposito']));
        // echo number_format((float)$_POST['deposito'], 2, '.', '');
        // print("<pre>".print_r($_SESSION,true)."</pre>");
        print("<pre>".print_r($this->aluno,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>