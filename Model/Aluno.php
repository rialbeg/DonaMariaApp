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

    public function alterarAluno(){
        $alunoDAO = new AlunoDAO();
        $alunoDAO->alterarAluno($this);
    }

    public function listarTodosAlunos(){
        $alunoDAO = new AlunoDAO();
        return $alunoDAO->listarTodosAlunos();
    } 

    
}