<?php


  include('../librerias/conexion.php');

  $email = $_POST['email'];
  $password = $_POST['password'];
  $name = $_POST['name'];

  // Insertamos los valores en la tabla de datos
 

  if ($email!=="" && $email!=="" && $name!==""){
    $sql = "INSERT into usuarios(`email`, `password`, `name`) VALUES ('".$email."', '".$password."', '".$name."')";
    $result = mysqli_query($link, $sql);
    if($result){
      header("Location:../index.php?createuser=ok");
    }else{
      header("Location:../index.php?createuser=ko");
    }

  }else{
    header("Location:index.php?createuser=error");
  }


  
?>