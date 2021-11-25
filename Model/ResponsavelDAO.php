<?php 

    require_once "Conexao.php";
    class ResponsavelDAO{

        
        public function listarTodosResponsaveis(){
             //vai ao banco de dados e pega todos os livros
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "SELECT IDRESPONSAVEL,NOME,CPF,EMAIL,TELEFONE,USERLOGIN,NIVELACESSO
                        FROM responsavel
                        INNER JOIN usuario
                        ON responsavel.IDRESPONSAVEL = usuario.ID_RESPONSAVEL;";

                $stmt = $minhaConexao->prepare($sql);
            
                    
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                // print("<pre>".print_r($result,true)."</pre>");
                
                $listaResp = array();
                $i=0;
    
                while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    // print("<pre>".print_r($linha,true)."</pre>");
                    $responsavel = new Responsavel();
                    $responsavel->setIdResponsavel($linha['IDRESPONSAVEL']);
                    $responsavel->setNome($linha['NOME']);
                    $responsavel->setCpf($linha['CPF']);
                    $responsavel->setEmail($linha['EMAIL']);
                    $responsavel->setTelefone($linha['TELEFONE']);
                    $responsavel->getUsuario()->setUserLogin($linha['USERLOGIN']);
                    $responsavel->getUsuario()->setNivelAcesso($linha['NIVELACESSO']);
                    $listaResp[$i] = $responsavel;
                    $i++;   
                }
                // print("<pre>".print_r($listaResp,true)."</pre>");

                return $listaResp;
            }
            catch(PDOException $e){
                return array();
            }
        }//end function
    }