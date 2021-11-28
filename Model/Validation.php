<?php 

    class Validation{

        public static function validaSessao(){
            session_start();
            $url = strtoupper($_GET['url']);
            if(isset($_SESSION['autenticado']))
            {
                
                $nivelA = ["ADMINDASH","CADASTROPRODUTO","CADASTRORESPONSAVEL",
                            "INCLUIRPRODUTO","ALTERARPRODUTO","EXCLUIRPRODUTO","FORMALTERARPRODUTO",
                            "INCLUIRRESPONSAVEL","ALTERARRESPONSAVEL","EXCLUIRRESPONSAVEL","FORMALTERARRESPONSAVEL"];

                $nivelB = ['RESPONSAVELDASH', 'CADASTROALUNO', 'DEPOSITOALUNO','INCLUIRALUNO','EXCLUIRALUNO'];
                
                $nivelC = ['ALUNODASH','COMPRAR'];
                
                switch ($_SESSION['nivelacesso']) {
                    case 'A':
                        if(!in_array($url, $nivelA))
                            header('Location:AdminDash', true,302);
                        break;
                    case 'B':
                        if(!in_array($url, $nivelB))
                            header('Location:ResponsavelDash', true,302);
                        break;
                    case 'C':
                        if(!in_array($url, $nivelC))
                            header('Location:AlunoDash', true,302);
                        break;
                }
            }else if($url != 'LOGIN')
                header('Location:Login', true,302);
        }

        public static function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        
    }