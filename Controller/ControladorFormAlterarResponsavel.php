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
        
        echo "entrou form alterar produto";
        // require "View/pages/alterar_produto.php";
        

        // print("<pre>".print_r($_POST,true)."</pre>");
        
        // print("<pre>".print_r($this->produto,true)."</pre>");
        // $vars = get_defined_vars();
        // print("<pre>".print_r($vars,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>