<?php
$host="localhost";
$user="root";
$pass="";
$db="BlackAndPink";
$con=mysqli_connect($host,$user,$pass,$db);
    $NomCompleto=$_POST["NomCompleto"];
    $Año=$_POST["Año"];
    $Mes=$_POST["Mes"];
    $Día=$_POST["Día"];
    $Correo=$_POST["Correo"];
    $HM=$_POST["HM"];
    $Telefono=$_POST["Telefono"];
    $Contraseña=$_POST["Contraseña"];

$insertar="INSERT INTO datos (NomCompleto,Año,Mes,Día,Correo,HM,Telefono,Contraseña)  VALUES('$NomCompleto','$Año','$Mes','$Día','$Correo','$HM','$Telefono','$Contraseña')";
$query=mysqli_query($con,$insertar);
if(!$query){
  echo "hubo un error";}
  else {
    echo"<Script language='Javascript' type='text/javascript'>
    window.location='\index.html'
    </Script>";
  }
  ?>
