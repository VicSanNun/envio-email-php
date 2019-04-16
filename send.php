<?php 

	require ('verifica.php');

	if(verifica($_POST['nome']) && verifica($_POST['email']) && verifica($_POST['mensagem'])){
		echo 'ok';
	}