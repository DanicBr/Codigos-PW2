<style>
	body{
		font-family: arial;
		font-size: 20px;
	}
</style>

<?php  

if (isset($_POST['nome'])) {
	$nome  = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	require 'contato.class.php';
	$contato = new Contato();
	$contato->adicionarContato($nome,$senha,$email);

	
}