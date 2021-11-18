<?php

require_once "IControlador.php";
class ControladorResponsavelDashboard implements IControlador{
    
    public function processaRequisicao(){
        require "View/pages/responsavelDashboard.php";
    }
}
    
    
?>