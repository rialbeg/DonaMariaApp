<?php

require_once "IControlador.php";
class ControladorAlunoDashboard implements IControlador{
    
    public function processaRequisicao(){
        require "View/pages/alunoDashboard.php";
    }
}
    
    
?>