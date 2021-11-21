<?php 

require "Conexao.php";
class ProdutoDAO{
    public function buscarIngredientePorID($id){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = "SELECT INGREDIENTE,ID_PRODUTO
                    FROM INGREDIENTE
                    WHERE ID_PRODUTO = :id";
            $stmt = $minhaConexao->prepare($sql);
            $stmt->bindParam(':id',$id);
                
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //separando os ingredientes por vírgula
            $string = array();
            foreach ($result as  $key => $value){ 
                array_push($string,$value['INGREDIENTE']);
            }
            $string = implode(",",$string);

            return $string;
            // print("<pre>".print_r($string,true)."</pre>");
        }catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
    }
    public function listarTodosProdutos($produtos){
        //vai ao banco de dados e pega todos os livros
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = "SELECT IDPRODUTO,CODIGO,TIPO,NOME,FORNECEDOR,CAMINHOIMAGEM,PRECO
                    FROM PRODUTO";
            $stmt = $minhaConexao->prepare($sql);
        
                
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // print("<pre>".print_r($result,true)."</pre>");
            
            $listaProd = array();
            $i=0;

            while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // print("<pre>".print_r($linha,true)."</pre>");
                $produto = new Produto();
                $produto->setIdProduto($linha['IDPRODUTO']);
                $produto->setCodigo($linha['CODIGO']);
                $produto->setTipo($linha['TIPO']);
                $produto->setNome($linha['NOME']);
                $produto->setCaminhoImagem($linha['CAMINHOIMAGEM']);
                $produto->setFornecedor($linha['FORNECEDOR']);
                $produto->setPreco($linha['PRECO']);
                $listaProd[$i] = $produto;
                $i++;   
            }
            // print("<pre>".print_r($listaProd,true)."</pre>");
            return $listaProd;
        }
        catch(PDOException $e){
            return array();
        }
    }

}