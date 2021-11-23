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

    public function listarTodosProdutos($produto){
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

    public function incluirProduto($produto){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = "INSERT INTO PRODUTO (IDPRODUTO,CODIGO,TIPO,NOME,CAMINHOIMAGEM,FORNECEDOR,PRECO)
            VALUES(NULL,:codigo,:tipo,:nome,NULL,:fornecedor,:preco);";
            $stmt = $minhaConexao->prepare($sql);
            
            $stmt->bindParam("codigo",$codigo);
            $stmt->bindParam("tipo",$tipo);
            $stmt->bindParam("nome",$nome);
            $stmt->bindParam("fornecedor",$fornecedor);
            $stmt->bindParam("preco",$preco);

            $codigo = $produto->getCodigo();
            $tipo = $produto->getTipo();
            $nome = $produto->getNome();
            $fornecedor = $produto->getFornecedor() ? $produto->getFornecedor() : NULL;
            $preco = $produto->getPreco();

            $stmt->execute();
            
            $last_id = $minhaConexao->lastInsertId();
            $produto->setIdProduto($last_id);
            // echo "Livro incluido com id=".$last_id;

            $imagem = $produto->getCaminhoImagem();  
            if($imagem != NULL) {
                // echo "entrou no if da imagem !=null";
                //defini o nome do novo arquivo, que será o id gerado para o livro
                $nomeFinal = 'View/images/produtos/' . $last_id . '.jpg';
                //move o arquivo para a pasta atual com esse novo nome
                if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
                    // echo "Copiou a imagem";
                //atualiza o banco de dados para guardar o nome do arquivo gerado.
                $sql = "UPDATE PRODUTO
                SET CAMINHOIMAGEM = :nomeImagem
                WHERE IDPRODUTO = :id";
                $stmt = $minhaConexao->prepare($sql);
                $stmt->bindParam("nomeImagem",$nomeFinal);
                $stmt->bindParam("id",$last_id);
                $stmt->execute();
                
                // return $last_id;
                }
            }
            if($tipo == "Comida"){
                
                $ingredientes = explode(",", $_POST["ingredientes"]);
                foreach ($ingredientes as $key => $ingrediente) {
                    $sql = "INSERT INTO INGREDIENTE VALUES(:ingrediente, :id)";
                    $stmt = $minhaConexao->prepare($sql);
                    $stmt->bindParam("ingrediente",$ingrediente);
                    $stmt->bindParam("id",$last_id);
                    $stmt->execute();

                }
            }

        }
        catch(PDOException $e){
            echo "entrou no catch".$e->getmessage();
            return 0;
        }
    }

    public function alterarProduto($produto){
        try{
            $minhaConexao = Conexao::getConexao();

            //montando a queryResult
            print("<pre>".print_r($produto,true)."</pre>");
            $sql = "UPDATE PRODUTO set ";
            $sql .= "nome=:nome, edicao=:edicao, ano=:ano "; 
            $sql .=  "where IDPRODUTO = :id";      
            // $stmt = $minhaConexao->prepare();
            // $stmt->bindParam("codigo",$codigo);
            // $stmt->bindParam("nome",$nome);
            // $stmt->bindParam("edicao",$edicao);
            // $stmt->bindParam("ano",$ano);
            // $codigo = $liv->getCodigo();
            // $nome = $liv->getTitulo();
            // $edicao = $liv->getEdicao();
            // $ano = $liv->getAno();
            // $stmt->execute();
            
         }
         catch(PDOException $e){
             //echo "entrou no catch".$e->getmessage();
            
         }
    }
    
    public function pesquisarProduto($produto){
         //vai ao banco de dados e pega todos os livros
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = "SELECT * FROM PRODUTO
                    WHERE IDPRODUTO = :id";
            $stmt = $minhaConexao->prepare($sql);
            $stmt->bindParam("id",$id);
            $id = $produto->getIdProduto();
            
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            // print("<pre>".print_r($stmt->fetchAll(),true)."</pre>");
            while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $produto->setCodigo($linha['CODIGO']);
                $produto->setTipo($linha['TIPO']);
                $produto->setNome($linha['NOME']);
                $produto->setCaminhoImagem($linha['CAMINHOIMAGEM']);
                $produto->setFornecedor($linha['FORNECEDOR']);
                $produto->setPreco($linha['PRECO']);
            }
        
        }
        catch(PDOException $e){
            echo "Error " . $e->getMessage();
        }
    }

    public function excluirProduto($produto){
        try{

            $minhaConexao = Conexao::getConexao();

            $sql = "SELECT CAMINHOIMAGEM,TIPO FROM PRODUTO 
                    WHERE IDPRODUTO = :id";
            $stmt = $minhaConexao->prepare($sql);
            $stmt->bindParam("id",$id);
            $id = $produto->getIdProduto();
            
            $stmt->execute();

            //deletar a imagem do banco
            $queryResult = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
            print("<pre>".print_r($queryResult,true)."</pre>");
            
            if (file_exists($queryResult['CAMINHOIMAGEM'])) 
            {
                unlink($queryResult['CAMINHOIMAGEM']);
                echo "Arquivo deletado com sucesso"; 
            }
            else
            {
                echo "Arquivo não existe"; 
            }    

            if($queryResult['TIPO'] === 'Comida'){
                $sql = "DELETE FROM INGREDIENTE 
                    WHERE ID_PRODUTO = :id";
                $stmt = $minhaConexao->prepare($sql);
                $stmt->bindParam("id",$id);
                $id = $produto->getIdProduto();
                
                $stmt->execute();
            }
                
            //deletar a linha da tabela produto
            $sql = "DELETE FROM PRODUTO 
                    WHERE IDPRODUTO = :id";
            $stmt = $minhaConexao->prepare($sql);
            $stmt->bindParam("id",$id);
            $id = $produto->getIdProduto();
            
            $stmt->execute();


        
        }
            catch(PDOException $e){
            echo "entrou no catch".$e->getmessage();
            exit();
        }
    }
}