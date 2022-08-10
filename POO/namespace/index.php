<?php 

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad -> setNome("Inaldo Junior");
	$cad -> setEmail("inaldoanjosjr@gmail.com");
	$cad -> setSenha("123456789");

	$cad -> registrarVenda();

 ?>