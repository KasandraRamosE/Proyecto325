<?php
  $qcod=$_REQUEST["cod"];
  $qmsj=$_REQUEST["msj"];

  echo $qcod . " " . $qmsj;
  $con=mysqli_connect("localhost","root");
  mysqli_select_db($con,"inf325");
  $sql="insert into refranes values ($qcod,'$qmsj');";
  $res=mysqli_query($con,$sql);
  
  mysqli_close($con);
  echo "Registro agregado!!!<br>";
?>