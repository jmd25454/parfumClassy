<?php  include_once 'lock.php';
if (!isset($_POST['salvar']) || empty($_POST['nome']) || empty($_POST['genero']) || empty($_POST['familia_oufativa']) || empty($_POST['ocasiao']) || empty($_POST['fixacao']))
{
	header('location:index.php?msg=cadembranco');
}
else
{
	$nome	 = $_POST['nome'];
	$familia_oufativa   = $_POST['familia_oufativa'];
	$genero = $_POST['genero'];
  $ocasiao = $_POST['ocasiao'];
  $fixacao = $_POST['fixacao'];

	include_once '../database/perfume.dao.php';

	$result = salvar_perfume($nome, $familia_oufativa, $genero, $ocasiao, $fixacao);

	if ($result)
	{
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		header('location:index.php?msg=errocadastro');
	}
}

?>