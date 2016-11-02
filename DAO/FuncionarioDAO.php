<?php
require_once './modelos/funcionario.php';
require_once 'PessoaDAO.php';
class FuncionarioDAO extends PessoaDAO{
    public function mudarTrabalho($funcionario, $trabalho){
           $funcionario->setTrabalhando($trabalho);
    }
    public function exibirstatus($funcionario){
        echo"<h1> Funcionario </h1>";
        $this->exibirPessoa($funcionario);
        echo"<p>Setor: " . $funcionario->getSetor()."</p>";
        echo"<p>Trabalhando: " . ($funcionario->getTrabalhando()? "Sim":"Não");
        }
}    
    

