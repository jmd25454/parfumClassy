<?php include_once 'lock.php';
include_once '../database/perfume.dao.php'; 

if (!isset($_GET['id_perfume']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	// tentar buscar o livro especificado no id
	$result = buscar_perfume($_GET['id_perfume']);

	if($result == null)
	{
		header('location:index.php?msg=idinvalido');
	}
	else
	{
		// converter o retorno (result) em um array associativo
		$perfume = mysqli_fetch_assoc($result);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto Final - Editar Perfume</title>
	<link rel="stylesheet" href="../css/estilo2.css">
</head>
<body>

		<h1>PERFUMCLASSY</h1>

	<p>
		<a href="index.php">Cencelar Edição</a>
	</p>

	<h4>Editar Informações De Um Produto Cadastrado</h4>

	<form action="editado.php" method="post">
		<input value="<?= $perfume['nome'] ?>" name="nome" type="text" class="feedback-input" placeholder="Nome do Perfume" />   

  	<input value="<?= $perfume['familia_oufativa'] ?>" name="familia_oufativa" type="text" class="feedback-input" placeholder="Família Oufativa" />
  	<input value="<?= $perfume['genero'] ?>" name="genero" type="text" class="feedback-input" placeholder="Gênero Olfativo" />

  	<input value="<?= $perfume['ocasiao'] ?>" name="ocasiao" type="text" class="feedback-input" placeholder="Ocasião de Uso" />	

		<input value="<?= $perfume['fixacao'] ?>" name="fixacao" type="text" class="feedback-input" placeholder="Tempo de Fixação" />

  	<input type="submit" name="salvar"/>

		<input type="hidden" name="id_perfume" value="<?= $perfume['id_perfume'] ?>">

		</form>
	</div>

</body>
</html>