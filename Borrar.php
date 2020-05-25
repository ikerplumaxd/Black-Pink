<?php
$host="localhost";
$user="root";
$pass="";
$db="BlackAndPink";
$con=mysqli_connect($host,$user,$pass,$db);
    $Correo=$_POST["Correo"];
$eliminar="DELETE FROM sugerencias WHERE Correo='$Correo'";
$query=mysqli_query($con,$eliminar);
if(!$query){
  echo "hubo un error";}
  else {
    echo"<Script language='Javascript' type='text/javascript'>
    window.location='\ListaSugerencias.php'
    </Script>";
  }
?>
