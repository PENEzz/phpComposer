<?php

include_once __DIR__. "/../vendor/autoload.php";

    use App\model\Pessoa;
    use App\model\Funcionario;

    $pessoa = new Pessoa("Atreus", 19);
    $funcionario = new Funcionario("Defu", 33, "Agiota");
    
    echo "Informações da Pessoa: ";
    $pessoa->Info();
    echo "<br>";
    
    echo "Informações do Funcionário: ";
    $funcionario->Info();