<?php

require_once "IControlador.php";
class ControladorHome implements IControlador{
    
    public function processaRequisicao(){
        require "View/home.php";
    }
}
    
    
?>