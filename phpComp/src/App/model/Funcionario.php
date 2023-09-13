<?php

namespace App\model;

class Funcionario extends Pessoa{

    public $funcionario;
    public $cargo;
    function __construct($funcionario, $nome, $idade, $genero, $nacionalidade, $cargo){
    parent::__construct ($nome, $idade, $genero, $nacionalidade, $cargo);
        $this->funcionario = $funcionario;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
        $this->nacionalidade = $nacionalidade;
        $this->cargo = $cargo;
    } 

    public function Info(){
        echo "Nome: " . $this->nome . ", Idade: " . $this->idade . ", Genêro: " . $this->genero . ", Nacionalidade: " . $this->nacionalidade . ", Cargo: " . $this->cargo;
    }

}
