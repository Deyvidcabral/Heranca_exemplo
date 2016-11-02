<?php

//require_once '../modelos/Pessoa.php';
class PessoaDAO  {
    public function Fazeraniver($pessoa){
        $pessoa->setidade($pessoa->getidade()+1);
        echo"<p> A idade da pessoa: ". $pessoa->getnome() . " mudou para: " . $pessoa->getidade();
    }
    
    public function exibirPessoa($pessoa){
        echo"<p>Nome: " . $pessoa->getnome()."<p>";
        echo"<p>Idade: ". $pessoa->getIdade()."<p>";
        echo"<p>Sexo: ". $pessoa->getsexo()."<p>";
    }
}
