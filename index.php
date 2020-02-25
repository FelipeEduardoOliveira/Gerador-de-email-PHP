<?php require_once('retorno.php') ?>


<!DOCTYPE html>
<html>
<head>
	<title>Gerador de e-mail</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	
<div class="email">		
	<p>
		<?php 
		RetornaEmail();
		?>
	</p>
</div>	
	 <div class="Btn">
	   <button onClick="history.go(0)"> Novo email</button>
	 </div>

</body>
</html>