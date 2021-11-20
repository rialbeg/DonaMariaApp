<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
class ControladorLogin implements IControlador{
    
    public function processaRequisicao(){
        Validation::validaSessao();
        require "View/pages/login.php";
    }
}
    
    
?>