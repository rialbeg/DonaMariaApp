<?php

    require_once "Model/Usuario.php";
    require_once "Model/Validation.php";
    require_once "IControlador.php";
    class ControladorFazerLogin implements IControlador{
        
        private $usuario;
        
        public function __construct(){
            $this->usuario = new Usuario();
        }
        public function processaRequisicao(){
            print("<pre>".print_r($_POST,true)."</pre>");
            
            $this->usuario->setUserLogin($_POST['userlogin']);
            $this->usuario->setSenha($_POST['senha']);

            $this->usuario->fazerLogin();
        }
    }
    
    
