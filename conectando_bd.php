<?php 

	$host = "localhost";
	$user = "user_dbLoja";
	$pwd = "123456";
	$db = "dbloja";

	$con = mysqli_connect($host, $user, $pwd, $db);
	
	if (mysqli_connect_errno()){
		echo "Não foi possivel acessar o banco de dados" .mysqli_connect_error();	

	}else{
		echo "Banco de dados conectado com sucesso!";
		$sql = "insert into tbPessoa(nome, email, idade)
		values('Etecia', 'sac@etecia.com')";
		mysql_query($con, $sql);

	}















 ?>