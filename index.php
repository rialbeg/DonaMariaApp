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
            case "LOGOFF":    
                require "Controller/ControladorLogoff.php";    
                $controlador = new ControladorLogoff();
                $controlador->processaRequisicao();
                break;
            case "ADMINDASH":    
                require "Controller/ControladorAdminDashboard.php";    
                $controlador = new ControladorAdminDashboard();
                $controlador->processaRequisicao();
                break;
            case "CADASTROPRODUTO":    
                require "Controller/ControladorCadastrarProduto.php";    
                $controlador = new ControladorCadastrarProduto();
                $controlador->processaRequisicao();
                break;
            case "INCLUIRPRODUTO":    
                require "Controller/ControladorIncluirProduto.php";    
                $controlador = new ControladorIncluirProduto();
                $controlador->processaRequisicao();
                break;
            case "ALTERARPRODUTO":    
                require "Controller/ControladorAlterarProduto.php";    
                $controlador = new ControladorAlterarProduto();
                $controlador->processaRequisicao();
                break;
            case "FORMALTERARPRODUTO":    
                require "Controller/ControladorFormAlterarProduto.php";    
                $controlador = new ControladorFormAlterarProduto();
                $controlador->processaRequisicao();
                break;
            case "EXCLUIRPRODUTO":    
                require "Controller/ControladorExcluirProduto.php";    
                $controlador = new ControladorExcluirProduto();
                $controlador->processaRequisicao();
                break;
            case "CADASTRORESPONSAVEL":    
                require "Controller/ControladorCadastrarResponsavel.php";    
                $controlador = new ControladorCadastrarResponsavel();
                $controlador->processaRequisicao();
                break;
            case "INCLUIRRESPONSAVEL":    
                require "Controller/ControladorIncluirResponsavel.php";    
                $controlador = new ControladorIncluirResponsavel();
                $controlador->processaRequisicao();
                break;
            case "ALTERARRESPONSAVEL":    
                require "Controller/ControladorAlterarResponsavel.php";    
                $controlador = new ControladorAlterarResponsavel();
                $controlador->processaRequisicao();
                break;
            case "FORMALTERARRESPONSAVEL":    
                require "Controller/ControladorFormAlterarResponsavel.php";    
                $controlador = new ControladorFormAlterarResponsavel();
                $controlador->processaRequisicao();
                break;
            case "EXCLUIRRESPONSAVEL":    
                require "Controller/ControladorExcluirResponsavel.php";    
                $controlador = new ControladorExcluirResponsavel();
                $controlador->processaRequisicao();
                break;
            case "RESPONSAVELDASH":    
                require "Controller/ControladorResponsavelDashboard.php";    
                $controlador = new ControladorResponsavelDashboard();
                $controlador->processaRequisicao();
                break;
            case "CADASTROALUNO":    
                require "Controller/ControladorCadastrarAluno.php";    
                $controlador = new ControladorCadastrarAluno();
                $controlador->processaRequisicao();
                break;
            case "INCLUIRALUNO":    
                require "Controller/ControladorIncluirAluno.php";    
                $controlador = new ControladorIncluirAluno();
                $controlador->processaRequisicao();
                break;
            case "ALTERARALUNO":    
                require "Controller/ControladorAlterarAluno.php";    
                $controlador = new ControladorAlterarAluno();
                $controlador->processaRequisicao();
                break;
            case "FORMALTERARALUNO":    
                require "Controller/ControladorFormAlterarAluno.php";    
                $controlador = new ControladorFormAlterarAluno();
                $controlador->processaRequisicao();
                break;
            case "EXCLUIRALUNO":    
                require "Controller/ControladorExcluirAluno.php";    
                $controlador = new ControladorExcluirAluno();
                $controlador->processaRequisicao();
                break;
            case "FORMDEPOSITOALUNO":    
                require "Controller/ControladorFormDepositoAluno.php";    
                $controlador = new ControladorFormDepositoAluno();
                $controlador->processaRequisicao();
                break;
            case "DEPOSITOALUNO":    
                require "Controller/ControladorDepositoAluno.php";    
                $controlador = new ControladorDepositoAluno();
                $controlador->processaRequisicao();
                break;
            case "ALUNODASH":    
                require "Controller/ControladorAlunoDashboard.php";    
                $controlador = new ControladorAlunoDashboard();
                $controlador->processaRequisicao();
                break;
            case "FAZERLOGIN":    
                require "Controller/ControladorFazerLogin.php";    
                $controlador = new ControladorFazerLogin();
                $controlador->processaRequisicao();
                break;
            case "ADDITEMCARRINHO":
				require "Controller/ControladorAddItemCarrinho.php";
				require_once 'Model/CarrinhoSession.php';
				$carrinhoSession = new CarrinhoSession();
				$controlador = new ControladorAddItemCarrinho($carrinhoSession);
				$controlador->processaRequisicao();
				break;
			case "CARRINHO":
				require "Controller/ControladorListaCarrinho.php";
				$controlador = new ControladorListaCarrinho();
				$controlador->processaRequisicao();
				break;
			case "CARRINHOALTQUANT":
				require "Controller/ControladorAlteraQuantCarrinho.php";
				require_once 'Model/CarrinhoSession.php';
				$carrinhoSession = new CarrinhoSession();
				$controlador = new ControladorAlteraQuantCarrinho($carrinhoSession);
				$controlador->processaRequisicao();
				break;
			case "APAGAITEMCARRINHO":
				require "Controller/ControladorApagaItemCarrinho.php";
				require_once 'Model/CarrinhoSession.php';
				$carrinhoSession = new CarrinhoSession();
				$controlador = new ControladorApagaItemCarrinho($carrinhoSession);
				$controlador->processaRequisicao();
				break;
			case "FINALIZACOMPRA":
				require "Controller/ControladorFinalizaCompra.php";
				require_once 'Model/CarrinhoSession.php';
				$carrinhoSession = new CarrinhoSession();
				$controlador = new ControladorFinalizaCompra($carrinhoSession);
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

