<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>parfumClassy</title>
  <link rel="stylesheet" type="text/css" href="css/rogerin.css" media="screen" />
</head>
<body>

<?php  

if (isset($_GET['msg']))
{
  include_once 'util.php';
  echo validar_msg($_GET['msg']);
}
?>
<form class="box" action="validar.php" method="post">

<h1>Login</h1>
<input type="text" name="usuario" placeholder="Username">
<input type="password" name="senha" placeholder="Password">
<input type="submit" name="entrar" value="Login">
</form>
  
</body>
</html>