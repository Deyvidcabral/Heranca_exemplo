<?php

require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especiadade;
    private $salario;
    
    function getEspeciadade() {
        return $this->especiadade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspeciadade($especiadade) {
        $this->especiadade = $especiadade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


}
