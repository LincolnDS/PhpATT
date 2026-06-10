<?php 
	$host = "localhost";
	$user = "arroz";
	$pwd = "123456";
	$db = "dbloja";

	$con = mysqli_connect($host, $user, $pwd, $db);
	if (mysqli_connect_errno()){
		echo "Não foi possivel acessar o banco de dados" .mysqli_connect_error();	

	}else{
		echo "Banco de dados conectado com sucesso!";
		$sql = "INSERT INTO tbpessoa(nome, email, idade) VALUES('$_POST[nome]','$_POST[email]', '$_POST[idade]')";

		mysqli_query($con, $sql);

		mysqli_close($con); 
	}

 ?>