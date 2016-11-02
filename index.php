<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
        <?php
        require_once './Modelos/Aluno.php';
        require_once './DAO/AlunoDAO.php';
        require_once './Modelos/Funcionario.php';
        require_once './DAO/FuncionarioDAO.php';
        require_once './Modelos/Professor.php';
        require_once './DAO/professorDAO.php';
        
        $pessoa[10] = array();
        $DAO[10] = array();     
        $DAO[0] = new AlunoDAO();
        
        $pessoa[0] = new aluno();
        $pessoa[0]->setNome("Deyvid");
        $pessoa[0]->setIdade(21);
        $pessoa[0]->setsexo("Homem");
        
        $DAO[0]->matricular($pessoa[0], "php");
        $DAO[0]->exibirStatus($pessoa[0]);
        $DAO[0]->cancelarMatr($pessoa[0]);
        $DAO[0]->matricular($pessoa[0], "php");
        
        $pessoa[1] = new Funcionario();
        $pessoa[1]->setNome("Matheus");
        $pessoa[1]->setIdade(300000);
        $pessoa[1]->setSexo("Homem");
        $pessoa[1]->setSetor("Direção");
        $pessoa[1]->setTrabalhando(true);
        
        $DAO[1] = new FuncionarioDAO();
        $DAO[1]->exibirStatus($pessoa[1]);
        $DAO[1]->mudarTrabalho($pessoa[1], false);
        $DAO[1]->exibirStatus($pessoa[1]);
        
        
        $pessoa[2] = new Professor();
        $pessoa[2]->setNome("Deyvid");
        $pessoa[2]->setIdade(29);
        $pessoa[2]->setSexo("Masculino");
        $pessoa[2]->setEspeciadade("Português");
        $pessoa[2]->setSalario(12000);
        
        $DAO[2] = new professorDAO();
        $DAO[2]->exibirstatus($pessoa[2]);
        $DAO[2]->aumentarsal($pessoa[2], 14000);
        $DAO[2]->exibirstatus($pessoa[2]);
        
        ?>
    </body>
</html>
