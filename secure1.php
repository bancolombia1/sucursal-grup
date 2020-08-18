<?php 
$password = "e10adc3949ba59abbe56e057f20f883e";
if (md5($_POST['password']) != $password) { 
?>
<h2>Iniciar sesion</h2>
<form name="form" method="post" action="">
<input type="password" name="password"><br>
<input type="submit" value="Login"></form>
<?php 
}else{
?>
Contenido protegido
<?php 
} 
?>