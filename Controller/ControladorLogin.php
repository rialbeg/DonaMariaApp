<?php

require_once "IControlador.php";
class ControladorLogin implements IControlador{
    
    public function processaRequisicao(){
        require "View/pages/login.php";
    }
}
    
    
?>