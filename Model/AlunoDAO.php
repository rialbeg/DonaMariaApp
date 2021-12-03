<?php 
    require_once "Conexao.php";
    class AlunoDAO{

        public function listarTodosAlunos($aluno){
            //vai ao banco de dados e pega todos os livros
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "SELECT IDALUNO,NOME,MATRICULA,TURMA,TURNO,TELEFONE,EMAIL,SALDO,USERLOGIN,NIVELACESSO
                        FROM aluno
                        INNER JOIN usuario
                        ON aluno.IDALUNO = usuario.ID_ALUNO
                        WHERE ALUNO.ID_RESPONSAVEL = :idresponsavel";

                $stmt = $minhaConexao->prepare($sql);
                $stmt->bindParam('idresponsavel', $idresponsavel);    
                $idresponsavel = $aluno->getId_responsavel();
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

        public function incluirAluno($aluno){
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "INSERT INTO ALUNO  (IDALUNO,NOME,MATRICULA,TURMA,TURNO,TELEFONE,EMAIL,SALDO,ID_RESPONSAVEL)
                        VALUES(NULL, :nome, :matricula,:turma,:turno,:telefone,:email,:saldo,:id_responsavel);";
                $stmt = $minhaConexao->prepare($sql);
                
                $stmt->bindParam("nome",$nome);
                $stmt->bindParam("matricula",$matricula);
                $stmt->bindParam("turma",$turma);
                $stmt->bindParam("turno",$turno);
                $stmt->bindParam("telefone",$telefone);
                $stmt->bindParam("email",$email);
                $stmt->bindParam("saldo",$saldo);
                $stmt->bindParam("id_responsavel",$id_responsavel);

                $nome = $aluno->getNome();
                $matricula = $aluno->getMatricula();
                $turma = $aluno->getTurma();
                $turno = $aluno->getTurno();
                $telefone = $aluno->getTelefone();
                $email = $aluno->getEmail();
                $saldo = $aluno->getSaldo();
                $id_responsavel = $aluno->getId_responsavel();

                $stmt->execute();

                $last_id = $minhaConexao->lastInsertId();
                $aluno->setIdAluno($last_id);

                $sql = "INSERT INTO USUARIO (IDUSUARIO, ID_ESCOLA, ID_RESPONSAVEL, ID_ALUNO, NIVELACESSO, USERLOGIN, SENHA)
                        VALUES(NULL, NULL, NULL, :idaluno, :nivelacesso, :userlogin ,:senha);";
                $stmt = $minhaConexao->prepare($sql);

                $stmt->bindParam(':idaluno',$last_id);
                $stmt->bindParam(':nivelacesso',$nivelacesso);
                $stmt->bindParam(':userlogin',$userlogin);
                $stmt->bindParam(':senha',$senha);

                $nivelacesso = $aluno->getUsuario()->getNivelacesso();
                $userlogin = $aluno->getUsuario()->getUserLogin();
                $senha = password_hash($aluno->getUsuario()->getSenha(),PASSWORD_DEFAULT);

                $stmt->execute();
                
            }
            catch(PDOException $e){
                echo "entrou no catch".$e->getmessage();
                return 0;
            }

        }// end incluirAluno

        public function alterarAluno($aluno){
            try{
                $minhaConexao = Conexao::getConexao();

                $sql = "UPDATE ALUNO, USUARIO SET 
                        ALUNO.NOME = :nome,
                        ALUNO.MATRICULA = :matricula,
                        ALUNO.TURMA = :turma,
                        ALUNO.TURNO = :turno,
                        ALUNO.TELEFONE = :telefone,
                        ALUNO.EMAIL = :email,
                        USUARIO.USERLOGIN = :userlogin,
                        USUARIO.SENHA = :senha
                        WHERE 
                            ALUNO.IDALUNO = :idaluno
                        AND
                            USUARIO.ID_ALUNO = :idaluno";
                $stmt = $minhaConexao->prepare($sql);
                
                $stmt->bindParam("nome",$nome);
                $stmt->bindParam("matricula",$matricula);
                $stmt->bindParam("turma",$turma);
                $stmt->bindParam("turno",$turno);
                $stmt->bindParam("telefone",$telefone);
                $stmt->bindParam("email",$email);
                $stmt->bindParam("userlogin",$userlogin);
                $stmt->bindParam("senha",$senha);
                $stmt->bindParam("idaluno",$idaluno);
                

                $nome = $aluno->getNome();
                $matricula = $aluno->getMatricula();
                $turma = $aluno->getTurma();
                $turno = $aluno->getTurno();
                $telefone = $aluno->getTelefone();
                $email = $aluno->getEmail();
                $userlogin = $aluno->getUsuario()->getUserLogin();
                $senha =password_hash($aluno->getUsuario()->getSenha(),PASSWORD_DEFAULT);
                $idaluno = $aluno->getIdAluno();

                $stmt->execute();
                
            }
            catch(PDOException $e){
                echo "entrou no catch".$e->getmessage();
            }
        }

        public function pesquisarAluno($aluno){
            
                try{
                    $minhaConexao = Conexao::getConexao();
                    $sql = "SELECT * FROM ALUNO
                            INNER JOIN usuario
                            ON IDALUNO = ID_ALUNO
                            WHERE IDALUNO = :idaluno;";
                    $stmt = $minhaConexao->prepare($sql);
                    $stmt->bindParam("idaluno",$idaluno);
                    $idaluno = $aluno->getIdAluno();
                    
                    $stmt->execute();
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    
                    // print("<pre>".print_r($stmt->fetchAll(),true)."</pre>");
                    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        // print("<pre>".print_r($linha,true)."</pre>");
                        $aluno->setNome($linha['NOME']);
                        $aluno->setMatricula($linha['MATRICULA']);
                        $aluno->setTurma($linha['TURMA']);
                        $aluno->setTurno($linha['TURNO']);
                        $aluno->setTelefone($linha['TELEFONE']);
                        $aluno->setEmail($linha['EMAIL']);
                        $aluno->getUsuario()->setUserLogin($linha['USERLOGIN']);
                        $aluno->getUsuario()->setNivelAcesso($linha['NIVELACESSO']);
                        $aluno->getUsuario()->setSenha($linha['SENHA']);
                    }
                    
                }
                catch(PDOException $e){
                    echo "Error " . $e->getMessage();
                }
        }// end pesquisarAluno

        public function pesquisarIdResponsavel($resp){
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "SELECT ID_RESPONSAVEL,USERLOGIN FROM USUARIO
                        WHERE IDUSUARIO = :idresponsavel;";
                $stmt = $minhaConexao->prepare($sql);
                $stmt->bindParam("idresponsavel",$idresponsavel);
                $idresponsavel = $resp->getId_responsavel();
                
                $stmt->execute();
                
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $resp->setId_responsavel($result[0]['ID_RESPONSAVEL']);
                
            }
            catch(PDOException $e){
                echo "Error " . $e->getMessage();
            }
        }

        public function excluirAluno($aluno){
            try{
                $minhaConexao = Conexao::getConexao();
                $sql = "DELETE FROM USUARIO 
                        WHERE ID_ALUNO = :idaluno";
                $idaluno = $aluno->getIdAluno();
                
                $stmt = $minhaConexao->prepare($sql);
                $stmt->bindParam('idaluno', $idaluno);
                $stmt->execute();
                
                $sql = "DELETE FROM ALUNO
                        WHERE IDALUNO = :idaluno";
                $stmt = $minhaConexao->prepare($sql);
                $stmt->bindParam('idaluno',$idaluno);
                $stmt->execute();
                
            }catch(PDOException $e){
                echo "entrou no catch".$e->getmessage();
                return 0;
            }
        }// end excluirAluno
    }