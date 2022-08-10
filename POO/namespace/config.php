<?php 

	spl_autoload_register(function($nameClass){

		$dirClass = "class";
		//$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . "php"; //DIRECTORY_SEPARATOR = pode ser utilizado tanto em unix como windows
		$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");

		if(file_exists($filename) === true){
			require_once($filename);
		}

	});

 ?>