<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
class ControladorAdminDashboard implements IControlador{
    
    public function processaRequisicao(){
        Validation::validaSessao();
        require "View/pages/adminDashboard.php";
    }
}
    
    
?>