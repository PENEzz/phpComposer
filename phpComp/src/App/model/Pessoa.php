<?php

namespace App\model;

class Pessoa{

    public $pessoa;
    public $nome;
    public $idade;
    public $genero;
    public $nacionalidade;

    public function __construct($pessoa, $nome, $idade, $genero, $nacionalidade){
        $this->pessoa = $pessoa;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
        $this->nacionalidade = $nacionalidade;
    } 

    public function Info(){
        echo "Nome: " . $this->nome . ", Idade: " . $this->idade . ", Genêro: " . $this->genero . ", Nacionalidade: " . $this->nacionalidade;
    }

}