<?php
  //$qcod=$_REQUEST["cod"];
  //$qmsj=$_REQUEST["msj"];

  //echo $qcod . " " . $qmsj;
  $con=mysqli_connect("localhost","root");
  mysqli_select_db($con,"inf325");
  $sql="select * from refranes";
  $res=mysqli_query($con,$sql);
  while (($reg=mysqli_fetch_row($res))){
  	echo $reg[0] . ";" . $reg[1] . ";<br>";
  }
  mysqli_close($con);
?>