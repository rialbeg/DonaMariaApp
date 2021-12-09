<?php

require_once "Model/Validation.php";
require_once "Model/CarrinhoSession.php";
require_once "Model/ItemCarrinho.php";
require_once "Model/Compra.php";
require_once "Model/Aluno.php";
require_once "IControlador.php";

Validation::validaSessao();
class ControladorFinalizaCompra implements IControlador{
     private $carrinhoSession;     
     private $compra;
     private $aluno;

     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
         $this->compra = new Compra();
         $this->aluno = new Aluno();
     }

     public function processaRequisicao(){
        if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])) {
            // print("<pre>".print_r($_POST,true)."</pre>");
            // print("<pre>".print_r($_SESSION,true)."</pre>");
            // print("<pre>".print_r($this->carrinhoSession->getItensCarrinho(),true)."</pre>");
            
            $itensCarrinho = $this->carrinhoSession->getItensCarrinho();
            $total = $this->carrinhoSession->getTotal();

            $this->aluno->setIdAluno($_SESSION['idusuario']);
            $this->aluno->pesquisarAlunoPorIdUsuario();
            $saldoAntigo = $this->aluno->getSaldo();
            
            
            // echo $total;
            $saldoNovo = $saldoAntigo - $total;
            echo $saldoNovo;
            if($saldoNovo < 0){
                echo "<script>alert('saldo insuficiente')
                            window.location.href='Carrinho'
                        </script>";
            }else{

                $this->aluno->setSaldo($saldoNovo);

                $this->compra->atualizarSaldoAluno($this->aluno);
                // print("<pre>".print_r($this->aluno,true)."</pre>");

                $this->compra->setId_aluno($this->aluno->getIdAluno());
                foreach($itensCarrinho as $item){
                    $this->compra->setId_produto($item->getProduto()->getIdProduto());
                    $this->compra->setQuantidade($item->getQuantidade());
                    $this->compra->incluirCompra();
                }
            }


            $this->carrinhoSession->limpaItensCarrinho();
        }
        header('Location:AlunoDash', true,302);

     }

}

?>