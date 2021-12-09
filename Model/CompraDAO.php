<?php 


require_once "Conexao.php";
class CompraDAO{


    public function incluirCompra($compra){
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "INSERT INTO compra(IDCOMPRA, ID_ALUNO, ID_PRODUTO, QUANTIDADE, DATAHORA)
                        VALUES (NULL,:id_aluno,:id_produto,:quantidade,NOW());";
                $stmt = $minhaConexao->prepare($sql);
                
                $stmt->bindParam("id_aluno",$id_aluno);
                $stmt->bindParam("id_produto",$id_produto);
                $stmt->bindParam("quantidade",$quantidade);

    
                $id_aluno = $compra->getId_aluno();
                $id_produto = $compra->getId_produto();
                $quantidade = $compra->getQuantidade();
    
                $stmt->execute();
            }
            catch(PDOException $e){
                echo "entrou no catch incluir Compra".$e->getmessage();
                return 0;
            }
    }// end incluirCompra
    public function atualizarSaldoAluno($aluno){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = "UPDATE aluno SET SALDO = :saldoNovo 
                    WHERE aluno.IDALUNO = :idaluno";
            $stmt = $minhaConexao->prepare($sql);
            
            $stmt->bindParam("saldoNovo",$saldoNovo);
            $stmt->bindParam("idaluno",$idaluno);


            $idaluno = $aluno->getIdAluno();
            $saldoNovo = $aluno->getSaldo();

            $stmt->execute();
        }
        catch(PDOException $e){
            echo "entrou no catch".$e->getmessage();
            return 0;
        }
    }//end atualizarSaldoAluno($aluno)
}

?>


