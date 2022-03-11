<?php include_once 'lock.php';
if (!isset($_POST['salvar']) || empty($_POST['nome']) || empty($_POST['genero']) || empty($_POST['familia_oufativa']) || empty($_POST['ocasiao']) || empty($_POST['fixacao']))
{
	header('location:index.php?msg=edtembranco');
}
else
{
	$id_perfume        = $_POST['id_perfume'];
	$nome	             = $_POST['nome'];
	$genero            = $_POST['genero'];
	$familia_oufativa  = $_POST['familia_oufativa'];
  $ocasiao           = $_POST['ocasiao'];
  $fixacao           = $_POST['fixacao']; 

	include_once '../database/perfume.dao.php';

	$result = editar_perfume($id_perfume,$familia_oufativa, $genero, $ocasiao, $fixacao, $nome);

	if ($result)
	{
		header('location:index.php?msg=editado');
	}
	else
	{
		header('location:index.php?msg=erroeditar');
	}
}


?>