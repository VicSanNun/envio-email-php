<?php 
	//Necessita ter um servidor de email

	require ('verifica.php');

	if(verifica($_POST['nome']) && verifica($_POST['email']) && verifica($_POST['mensagem'])){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$texto = $_POST['mensagem'];

		$para = "victornunes470@gmail.com";
		$assunto = "Contato pelo Formulário do Site";
		$corpo = "Nome: ".$nome." - Email: ".$email." - Mensagem: ".$texto;
		$cabecalho = "From: victornunes470@gmail.com"."\r\n"."Reply-To: ".$email."\r\n"."X-Mailer: PHP/".phpversion();
		mail($para, $assunto, $corpo, $cabecalho);
		echo "Enviado com Sucesso";
		exit;
	}