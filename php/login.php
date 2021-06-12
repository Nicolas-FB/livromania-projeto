<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../main.php");
						die;
					}
				}
			}
			
			echo "Usuário ou senha incorretos.";
		}else
		{
			echo "Usuário ou senha incorretos.";
		}
	}

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <link rel="stylesheet" href="../css/estilodologin.css" />
      <title>Livraria Mania</title>
      
     
    </head>
<body>

	<div class="div1">
      <section class="form-section">
        <h1>Entre na Livraria Mania</h1>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<label for="login-email">Nome</label>
			<input id="text" type="text" name="user_name"><br><br>

			<label for="login-password">Senha</label>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Entrar"><br><br>

			<a href="signup.php">Não possui uma conta?</a><br><br>
		</form>
	</div>

	<ul class="squares">
      
    </ul>
  
    <script src="../js/scriptdologin.js"></script>
</body>
</html>
