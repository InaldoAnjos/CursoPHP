<?php 


class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){
		echo $this -> nome . "<br/>";
		echo $this -> idade . "<br/>";
		echo $this -> senha . "<br/>";
	}

}

class Programador extends Pessoa {

}


$objeto = new Programador();

//echo $objeto -> nome . "<br/>";
//echo $objeto -> idade . "<br/>"; //Não é possível, pois o métoco é protected
//echo $objeto -> senha . "<br/>"; //Não é possível, pois o métoco é private

$objeto -> verDados();	


 ?>