<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Informações inválidas.";
		}
	}
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <link rel="stylesheet" href="../css/estilodocadastro.css" />
      <title>Livraria Mania</title>
      
      
     
    </head>
<body>
	<div class="div1">
      <section class="form-section">
        <h1>Cadastre-se na Livraria Mania</h1>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<label for="login-email">Nome</label>
			<input id="text" type="text" name="user_name"><br><br>

			<label for="login-password">Senha</label>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Já possui uma conta?</a><br><br>
		</form>
	</div>

	<ul class="squares">
      
    </ul>

	<script src="../js/scriptdologin.js"></script>
</body>
</html>