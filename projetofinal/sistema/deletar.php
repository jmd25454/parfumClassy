<?php  include_once 'lock.php';

if (!isset($_GET['id_perfume']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$id_perfume = $_GET['id_perfume'];

	include_once '../database/perfume.dao.php';

	$result = deletar_perfume($id_perfume);

	if ($result)
	{
		header('location:index.php?msg=perfumedeletado');
	}
	else
	{
		header('location:index.php?msg=errodeletar');
	}
}


?>