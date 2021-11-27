<?php 
    require_once "Conexao.php";
    class AlunoDAO{

        public function listarTodosAlunos(){
            //vai ao banco de dados e pega todos os livros
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "SELECT IDALUNO,NOME,MATRICULA,TURMA,TURNO,TELEFONE,EMAIL,SALDO,USERLOGIN,NIVELACESSO
                        FROM aluno
                        INNER JOIN usuario
                        ON aluno.IDALUNO = usuario.ID_ALUNO;";

                $stmt = $minhaConexao->prepare($sql);
            
                    
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                // print("<pre>".print_r($result,true)."</pre>");
                
                $listaAlunos = array();
                $i=0;
    
                while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    // print("<pre>".print_r($linha,true)."</pre>");
                    $aluno = new Aluno();
                    $aluno->setIdAluno($linha['IDALUNO']);
                    $aluno->setNome($linha['NOME']);
                    $aluno->setMatricula($linha['MATRICULA']);
                    $aluno->setTurma($linha['TURMA']);
                    $aluno->setTurno($linha['TURNO']);
                    $aluno->setTelefone($linha['TELEFONE']);
                    $aluno->setEmail($linha['EMAIL']);
                    $aluno->setSaldo($linha['SALDO']);
                    $aluno->getUsuario()->setUserLogin($linha['USERLOGIN']);
                    $aluno->getUsuario()->setNivelAcesso($linha['NIVELACESSO']);
                    $listaAlunos[$i] = $aluno;
                    $i++;   
                }
                // print("<pre>".print_r($listaResp,true)."</pre>");

                return $listaAlunos;
            }
            catch(PDOException $e){
                return array();
            }
        }//end listarTodosAlunos

        public function incluirAluno($resp){
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "INSERT INTO RESPONSAVEL  (IDRESPONSAVEL,NOME,CPF,EMAIL,TELEFONE)
                        VALUES(NULL, :nome, :cpf,:email,:telefone);";
                $stmt = $minhaConexao->prepare($sql);
                
                $stmt->bindParam("nome",$nome);
                $stmt->bindParam("cpf",$cpf);
                $stmt->bindParam("email",$email);
                $stmt->bindParam("telefone",$telefone);

                $nome = $resp->getNome();
                $cpf = $resp->getCpf();
                $email = $resp->getEmail();
                $telefone = $resp->getTelefone();
                
                $stmt->execute();

                $last_id = $minhaConexao->lastInsertId();
                $resp->setIdAluno($last_id);

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

        }// end incluirAluno

        public function alterarAluno($resp){
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
                $idresponsavel = $resp->getIdAluno();

                $stmt->execute();
                
            }
            catch(PDOException $e){
                echo "entrou no catch".$e->getmessage();
            }
        }

        public function pesquisarAluno($resp){
            //vai ao banco de dados e pega todos os livros
                try{
                    $minhaConexao = Conexao::getConexao();
                    $sql = "SELECT * FROM RESPONSAVEL
                            INNER JOIN usuario
                            ON IDRESPONSAVEL = ID_RESPONSAVEL
                            WHERE IDRESPONSAVEL = :idresponsavel;";
                    $stmt = $minhaConexao->prepare($sql);
                    $stmt->bindParam("idresponsavel",$idresponsavel);
                    $idresponsavel = $resp->getIdAluno();
                    
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
        }// end pesquisarAluno
        
        public function excluirAluno($resp){
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "DELETE FROM USUARIO 
                        WHERE ID_RESPONSAVEL = :idresponsavel";
                $idresponsavel = $resp->getIdAluno();
                
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
        }// end excluirAluno
    }