<?php

require_once "IControlador.php";
class ControladorLogoff implements IControlador{
    
    public function processaRequisicao(){
        require "View/pages/logoff.php";
    }
}
    
    
?>