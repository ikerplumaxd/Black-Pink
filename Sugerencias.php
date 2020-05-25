<?php
$host="localhost";
$user="root";
$pass="";
$db="BlackAndPink";
$con=mysqli_connect($host,$user,$pass,$db);
$NomCompleto=$_POST["Nombre"];
    $Correo=$_POST["Correo"];
    $Sugerencia=$_POST["Sugerencia"];
$insertar="INSERT INTO sugerencias (NomCompleto,Correo,Sugerencia)  VALUES('$NomCompleto','$Correo','$Sugerencia')";
$query=mysqli_query($con,$insertar);
if(!$query){
  echo "hubo un error";}
  else {
    echo"<Script language='Javascript' type='text/javascript'>
    window.location='\index.html'
    </Script>";
  }
?>
