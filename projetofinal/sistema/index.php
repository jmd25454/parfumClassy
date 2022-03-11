<?php include_once 'lock.php'; 
include_once '../database/perfume.dao.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>perfumClassy - INSIDE</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo2.css" />
	</head>
<body>
		

<h1>PERFUMCLASSY</h1>

<p>
  <a class="link"href="logout.php">Sair do Sistema</a>
</p>

<?php
if (isset($_GET['msg']))
	{
		include_once '../util.php';
		echo validar_msg($_GET['msg']);
	}
	?>

<form action="cadastro.php" method="post">
		<input name="nome" type="text" class="feedback-input" placeholder="Nome do Perfume" />   
  	<input name="familia_oufativa" type="text" class="feedback-input" placeholder="Família Oufativa" />
  	<input name="genero" type="text" class="feedback-input" placeholder="Gênero Olfativo" />
  	<input name="ocasiao" type="text" class="feedback-input" placeholder="Ocasião de Uso" />
		<input name="fixacao" type="text" class="feedback-input" placeholder="Tempo de Fixação" />
  	<input type="submit" name="salvar"/>

		</form>

    <h4><u>Perfumes Cadastrados</u></h4>



		
    <?php 
    
    	echo exibir_perfumes();
		
    ?>
		
  
</body>
</html>