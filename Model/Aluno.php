<?php 

require_once "Pessoa.php";
// require_once "Usuario.php";
require_once "AlunoDAO.php";

class Aluno extends Pessoa{
    private $idAluno;
    private $matricula;
    private $turma;
    private $turno;
    private $saldo;
    private $id_responsavel;

    public function __construct(){
        // Parent::setUsuario(new Usuario());
        Parent::__construct();
    }

    public function getIdAluno()
    {
        return $this->idAluno;
    }

    public function setIdAluno($idAluno)
    {
        $this->idAluno = $idAluno;
    }
    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getTurma()
    {
        return $this->turma;
    }

    public function setTurma($turma)
    {
        $this->turma = $turma;
    }

    public function getTurno()
    {
        return $this->turno;
    }

    public function setTurno($turno)
    {
        $this->turno = $turno;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getId_responsavel()
    {
        return $this->id_responsavel;
    }

    public function setId_responsavel($id_responsavel)
    {
        $this->id_responsavel = $id_responsavel;
    }

    public function incluirAluno(){
        $alunoDAO = new AlunoDAO();
        $alunoDAO->incluirAluno($this);
    }

    public function excluirAluno(){
        $alunoDAO = new AlunoDAO();
        $alunoDAO->excluirAluno($this);
    }

    public function pesquisarAluno(){
        $alunoDAO = new AlunoDAO();
        $alunoDAO->pesquisarAluno($this);
    }
    public function pesquisarAlunoPorIdUsuario(){
        $alunoDAO = new AlunoDAO();
        $alunoDAO->pesquisarAlunoPorIdUsuario($this);
    }
    public function pesquisarIdResponsavel(){
        $alunoDAO = new AlunoDAO();
        $alunoDAO->pesquisarIdResponsavel($this);
    }

    public function alterarAluno(){
        $alunoDAO = new AlunoDAO();
        $alunoDAO->alterarAluno($this);
    }

    public function listarTodosAlunos(){
        $alunoDAO = new AlunoDAO();
        return $alunoDAO->listarTodosAlunos($this);
    } 
    public function listarTodosAlunosPorEscola(){
        $alunoDAO = new AlunoDAO();
        return $alunoDAO->listarTodosAlunosPorEscola($this);
    } 
    public function depositarAluno(){
        $alunoDAO = new AlunoDAO();
        return $alunoDAO->depositarAluno($this);
    } 
}