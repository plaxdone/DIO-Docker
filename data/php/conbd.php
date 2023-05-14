<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("172.26.0.4", "root", "formulario", "contato");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$nome = $_REQUEST['nome'];
		$email = $_REQUEST['email'];
		$celular = $_REQUEST['celular'];
		$mensagem = $_REQUEST['mensagem'];
		
		$sql = "INSERT INTO form(nome,email,celular,mensagem) VALUES ('$nome',
			'$email','$celular','$mensagem')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Mensagem enviada com sucesso</h3>";
		} else{
			echo "ERRO $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
