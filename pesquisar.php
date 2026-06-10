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
		$sql = "SELECT nome,email, idade FROM tbpessoa";
		$resultado = mysqli_query($con,$sql);
		while ($pessoa = mysqli_fetch_array($resultado)) {
			echo $pessoa['nome'] .  "-"	. $pessoa['email'] . "<br><br>";
			
		}

		mysqli_close($con); 
	}

 ?>