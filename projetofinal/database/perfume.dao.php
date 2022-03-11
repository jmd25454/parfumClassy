<?php include_once 'conn.php';

function salvar_perfume($familia_oufativa, $genero, $ocasiao, $fixacao, $nome)
{
  $conn = conectar();

  $sql = "INSERT INTO perfumes_tb (nome, familia_oufativa, genero, ocasiao, fixacao)
  VALUES ('$nome', '$familia_oufativa', '$genero', '$ocasiao', '$fixacao')";

  $result = mysqli_query($conn, $sql);

  if (mysqli_affected_rows($conn) > 0)
  {
    return true;
  }

  return false;
}

function buscar_perfumes()
{
  $conn = conectar();

	$sql = "SELECT * FROM perfumes_tb";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

function exibir_perfumes()
{
  $result = buscar_perfumes();

  if ($result == null)
  {
    $retorno = '<h3> NENHUM PERFUME CADASTRADO</h3>';
  }
  else
  {
		$retorno = '<table border="1px">';
    $retorno .= '<tr>';
    $retorno .= '<th>ID</th>';
    $retorno .= '<th>Nome do Perfume</th>';
    $retorno .= '<th>Família Oufativa</th>';
    $retorno .= '<th>Gênero</th>';
    $retorno .= '<th>Ocasião</th>';
    $retorno .= '<th>Fixação</th>';
    $retorno .= '<th>Deletar</th>';
    $retorno .= '<th>Editar</th>';
    $retorno .= '</tr>';
    
    while ($perfume = mysqli_fetch_assoc($result))
    {
      $retorno .= '<tr>';
      $retorno .= "<td>" . $perfume['id_perfume'] . "</td>";
      $retorno .= "<td>" . $perfume['familia_oufativa'] . "</td>";
      $retorno .= "<td>" . $perfume['genero'] . "</td>";
      $retorno .= "<td>" . $perfume['ocasiao'] . "</td>";
      $retorno .= "<td>" . $perfume['fixacao'] . "</td>";
      $retorno .= "<td>" . $perfume['nome'] . "</td>";
      $retorno .= "<td>" . link_deletar($perfume['id_perfume']) . "</td>";
			$retorno .= "<td>" . link_editar($perfume['id_perfume'])  . "</td>";
      $retorno .= '</tr>';
    }

    $retorno .= '</table>';
    $retorno .= '</div>';
  }

  return $retorno;
}

function link_deletar($id_perfume)
{
	$link = '<a href="deletar.php?id_perfume='.$id_perfume.'" 
	onclick="return confirm(\'Tem certeza que deseja excluir este perfume?\')">Deletar</a>';

	return $link;
}

function link_editar($id_perfume)
{
	$link = '<a href="editar.php?id_perfume='.$id_perfume.'">Editar</a>';
	return $link;
}

function deletar_perfume($id_perfume)
{
	$conn = conectar();

	$sql = "DELETE FROM perfumes_tb WHERE id_perfume = $id_perfume";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

function buscar_perfume($id_perfume)
{
	$conn = conectar();

	$sql = "SELECT * FROM perfumes_tb WHERE id_perfume = $id_perfume";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

function editar_perfume($id_perfume,$familia_oufativa, $genero, $ocasiao, $fixacao, $nome)
{
	$conn = conectar();

	$sql = "UPDATE perfumes_tb SET familia_oufativa = '$familia_oufativa', genero = '$genero', ocasiao = '$ocasiao', fixacao = '$fixacao', nome = '$nome'
	WHERE id_perfume = $id_perfume";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}


?>