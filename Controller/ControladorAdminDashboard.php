<?php

require_once "IControlador.php";
class ControladorAdminDashboard implements IControlador{
    
    public function processaRequisicao(){
        require "View/pages/adminDashboard.php";
    }
}
    
    
?>