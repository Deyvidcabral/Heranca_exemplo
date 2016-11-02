<?php

require_once './Modelos/aluno.php';
require_once 'PessoaDAO.php';
class AlunoDAO extends PessoaDAO{
        public function cancelarMatr($aluno){
            if($aluno->getMatr()){
               echo"<p>O aluno cancelou a matricula</p>";
               $aluno->setMatr(false);
               $aluno->setCurso(null);
            } else{
               echo"<p> Aluno ainda não matriculado</p>";
            }
        }
        public function matricular($aluno, $curso){
            if($aluno->getMatr() != true){
                $aluno->setMatr(true);
                $aluno->setcurso($curso);
            }else if ($aluno->getMatr() != null ){
                echo"<p> O aluno já está matriculado</p>";  
            }
        }
        
        public function exibirstatus($aluno){
            echo"<h1> ALUNO </h1>";
            $this->exibirPessoa($aluno);
            echo"<p>Matriculado: " . ($aluno->getmatr()? "sim":"nao") . "</p>";
            if ($aluno->getMatr()){
            echo"<p>Curso:" . $aluno->getcurso();
            }
        }
}
