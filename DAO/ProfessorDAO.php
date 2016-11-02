<?php

require_once 'PessoaDAO.php';
class ProfessorDAO extends PessoaDAO{
    public function aumentarsal($professor, $salario){
        $professor->setsalario($salario);
        echo"<p> O salario do professor ". $professor->getnome() . " aumentou para: ". $professor->getsalario();       
    }
    public function exibirstatus($professor){
        echo"<h1> Professor </h1>";
        $this->exibirPessoa($professor);
        echo"<p>Especialidade: " . $professor->getEspeciadade();
        echo"<p>Salario:" . $professor->getSalario();
        }
        
}
