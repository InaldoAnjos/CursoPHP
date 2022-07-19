<?php

class Pessoa{ //O nome da classe inicia com maiúscula

    public $nome;//Atributo

    public function falar(){//Método  --- public é o encapsulamento
        return "O meu nome é: " . $this->nome;
    }
}

$junior = new Pessoa();
$junior->nome = "Inaldo Junior";

echo $junior->falar();


?>