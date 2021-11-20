<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
class ControladorAlunoDashboard implements IControlador{
    
    public function processaRequisicao(){
        Validation::validaSessao();
        require "View/pages/alunoDashboard.php";
    }
}
    
    
?>