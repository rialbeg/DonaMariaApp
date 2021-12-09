<?php 

    require_once "Conexao.php";
    class ResponsavelDAO{

        
        public function listarTodosResponsaveis($resp){
             //vai ao banco de dados e pega todos os livros
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "SELECT IDRESPONSAVEL,NOME,CPF,EMAIL,TELEFONE,USERLOGIN,NIVELACESSO
                        FROM responsavel
                        INNER JOIN usuario
                        ON responsavel.IDRESPONSAVEL = usuario.ID_RESPONSAVEL
                        WHERE responsavel.ID_ESCOLA = :id_escola";


                $stmt = $minhaConexao->prepare($sql);
            
                $stmt->bindParam('id_escola',$id_escola);
                $id_escola = $resp->getId_escola();
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
        }//end listarTodosResponsaveis

        public function incluirResponsavel($resp){
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "INSERT INTO RESPONSAVEL  (IDRESPONSAVEL,NOME,CPF,EMAIL,TELEFONE,ID_ESCOLA)
                        VALUES(NULL, :nome, :cpf,:email,:telefone,:id_escola);";
                $stmt = $minhaConexao->prepare($sql);
                
                $stmt->bindParam("nome",$nome);
                $stmt->bindParam("cpf",$cpf);
                $stmt->bindParam("email",$email);
                $stmt->bindParam("telefone",$telefone);
                $stmt->bindParam("id_escola",$id_escola);

                $nome = $resp->getNome();
                $cpf = $resp->getCpf();
                $email = $resp->getEmail();
                $telefone = $resp->getTelefone();
                $id_escola = $resp->getId_escola();
                
                $stmt->execute();

                $last_id = $minhaConexao->lastInsertId();
                $resp->setIdResponsavel($last_id);

                $sql = "INSERT INTO USUARIO (IDUSUARIO, ID_ESCOLA, ID_RESPONSAVEL, ID_ALUNO, NIVELACESSO, USERLOGIN, SENHA)
                        VALUES(NULL, NULL, :idresponsavel, NULL, :nivelacesso, :userlogin ,:senha);";
                $stmt = $minhaConexao->prepare($sql);

                $stmt->bindParam(':idresponsavel',$last_id);
                $stmt->bindParam(':nivelacesso',$nivelacesso);
                $stmt->bindParam(':userlogin',$userlogin);
                $stmt->bindParam(':senha',$senha);

                $nivelacesso = $resp->getUsuario()->getNivelacesso();
                $userlogin = $resp->getUsuario()->getUserLogin();
                $senha = password_hash($resp->getUsuario()->getSenha(),PASSWORD_DEFAULT);

                $stmt->execute();
                
            }
            catch(PDOException $e){
                echo "entrou no catch".$e->getmessage();
                return 0;
            }

        }// end incluirResponsavel

        public function alterarResponsavel($resp){
            try{
                $minhaConexao = Conexao::getConexao();

                $sql = "UPDATE RESPONSAVEL, USUARIO SET 
                        RESPONSAVEL.NOME = :nome,
                        RESPONSAVEL.CPF = :cpf,
                        RESPONSAVEL.EMAIL = :email,
                        RESPONSAVEL.TELEFONE = :telefone,
                        USUARIO.USERLOGIN = :userlogin,
                        USUARIO.SENHA = :senha
                        WHERE 
                            RESPONSAVEL.IDRESPONSAVEL = :idresponsavel
                        AND
                            USUARIO.ID_RESPONSAVEL = :idresponsavel";
                $stmt = $minhaConexao->prepare($sql);
                
                $stmt->bindParam("nome",$nome);
                $stmt->bindParam("cpf",$cpf);
                $stmt->bindParam("email",$email);
                $stmt->bindParam("telefone",$telefone);
                $stmt->bindParam("userlogin",$userlogin);
                $stmt->bindParam("senha",$senha);
                $stmt->bindParam("idresponsavel",$idresponsavel);
                

                $nome = $resp->getNome();
                $cpf = $resp->getCpf();
                $email = $resp->getEmail();
                $telefone = $resp->getTelefone();
                $userlogin = $resp->getUsuario()->getUserLogin();
                $senha =password_hash($resp->getUsuario()->getSenha(),PASSWORD_DEFAULT);
                $idresponsavel = $resp->getIdResponsavel();

                $stmt->execute();
                
            }
            catch(PDOException $e){
                echo "entrou no catch".$e->getmessage();
            }
        }

        public function pesquisarResponsavel($resp){
            //vai ao banco de dados e pega todos os livros
                try{
                    $minhaConexao = Conexao::getConexao();
                    $sql = "SELECT * FROM RESPONSAVEL
                            INNER JOIN usuario
                            ON IDRESPONSAVEL = ID_RESPONSAVEL
                            WHERE IDRESPONSAVEL = :idresponsavel;";
                    $stmt = $minhaConexao->prepare($sql);
                    $stmt->bindParam("idresponsavel",$idresponsavel);
                    $idresponsavel = $resp->getIdResponsavel();
                    
                    $stmt->execute();
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    
                    // print("<pre>".print_r($stmt->fetchAll(),true)."</pre>");
                    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        // print("<pre>".print_r($linha,true)."</pre>");
                        $resp->setNome($linha['NOME']);
                        $resp->setCpf($linha['CPF']);
                        $resp->setEmail($linha['EMAIL']);
                        $resp->setTelefone($linha['TELEFONE']);
                        $resp->getUsuario()->setUserLogin($linha['USERLOGIN']);
                        $resp->getUsuario()->setNivelAcesso($linha['NIVELACESSO']);
                        $resp->getUsuario()->setSenha($linha['SENHA']);
                    }
                    
                }
                catch(PDOException $e){
                    echo "Error " . $e->getMessage();
                }
        }// end pesquisarResponsavel
        
        public function excluirResponsavel($resp){
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "DELETE FROM USUARIO 
                        WHERE ID_RESPONSAVEL = :idresponsavel";
                $idresponsavel = $resp->getIdResponsavel();
                
                $stmt = $minhaConexao->prepare($sql);
                $stmt->bindParam('idresponsavel', $idresponsavel);
                $stmt->execute();
                
                $sql = "DELETE FROM RESPONSAVEL
                        WHERE IDRESPONSAVEL = :idresponsavel";
                $stmt = $minhaConexao->prepare($sql);
                $stmt->bindParam('idresponsavel',$idresponsavel);
                $stmt->execute();
                
            }catch(PDOException $e){
                echo "entrou no catch".$e->getmessage();
                return 0;
            }
        }// end excluirResponsavel
    }