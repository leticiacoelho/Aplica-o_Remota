<?php
//  session_start();
  include "db.php";

  $con=conexao();
  $ID=$_POST['ID'];
  $Nome=$_POST['Nome'];

  $Marca=$_POST['Marca'];
  $Modelo=$_POST['Modelo'];
  $Tipo=$_POST['Tipo'];
  $Placa_ID=$_POST['Placa_ID'];
  $Datasheet=$_POST['Datasheet'];

  $consulta = "INSERT INTO sensor(ID,Nome,Tipo,Valor,Marca,Modelo,Placa_ID,Datasheet) VALUES ('$ID','$Nome','$Tipo','$Valor','$Marca','$Modelo','$Placa_ID','$Datasheet')";

  $resultado = $con->query($consulta);

  //$resultado->close();
  //$con->close();

  if($resultado){
    header("Location:..\index.php");
  }else{
    header("Location:error.php");
  }
 ?>
