<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
class ControladorCadastrarResponsavel implements IControlador{
    
    public function processaRequisicao(){
        Validation::validaSessao();
        require "View/pages/cadastrar_responsavel.php";
    }
}
    
    
?>