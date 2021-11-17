<?php 


    // print("<pre>".print_r($_GET,true)."</pre>");
    //testa a variável url que veio lá do htaccess
    if(!isset($_GET['url']))
        header('Location:Home', true,302);
	if (isset($_GET['url'])) //se estiver preenchida, pega o valor
    {
        $url =  strtoupper($_GET['url']);
        switch ($url){
            case "HOME":    
                require "Controller/ControladorHome.php";    
                $controlador = new ControladorHome();
                $controlador->processaRequisicao();
                break;
            case "LOGIN":    
                require "Controller/ControladorLogin.php";    
                $controlador = new ControladorLogin();
                $controlador->processaRequisicao();
                break;
            case "ADMINDASH":    
                require "Controller/ControladorAdminDashboard.php";    
                $controlador = new ControladorAdminDashboard();
                $controlador->processaRequisicao();
                break;
            default:
                require "Controller/ControladorHome.php";    
                $controlador = new ControladorHome();
                $controlador->processaRequisicao();
                break;
        }
    }
    else                     //senão, vai para uma página padrão, neste caso a home do site
        $url = '404.php';
?>

