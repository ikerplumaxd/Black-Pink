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
$editar="UPDATE datos set Año='$Año',Mes='$Mes',Día='$Día',NomCompleto='$NomCompleto',HM='$HM',Telefono='$Telefono',Contraseña='$Contraseña' WHERE Correo='$Correo'";
$query=mysqli_query($con,$editar);
if (!$query) {
  echo "error";
}
else {
  echo"<Script language='Javascript' type='text/javascript'>
  window.location='\index.html'
  </Script>";
}
 ?>
