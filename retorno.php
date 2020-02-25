<?php
function RetornaEmail()
{
	$nomeMasc1 = array('joao', 'jonas', 'marcos', 'caio', 'carlos', 'rodrigo', 'andre' , 'diogo',
					'leandro', 'samuel', 'daniel', 'pablo', 'jose', 'rogerio');
		$randNomeMasc1 = rand(0,13);

	$nomeMasc2 = array('pimentel' , 'eduardo' , 'oliveira', 'andrade' , 'camilo' , 'rodrigues', 'gomes', 'lima');
		$randNomeMasc2 = rand(0,7);

	$sinal = array('-','.','_');
		$randSinal = rand(0,2);

	$Email = array('@gmail.com', '@hotmail.com', '@outlook.com', 
				   '@yahoo.com.br', '@bol.com.br', '@live.com',
					'@icloud.com', '@uol.com.br');
		$randEmail = rand(0,7);

		$resultado = $nomeMasc1["$randNomeMasc1"] . $sinal["$randSinal"] . $nomeMasc2["$randNomeMasc2"] . $Email["$randEmail"];

		echo $resultado;
}


 ?>