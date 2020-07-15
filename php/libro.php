
<?php
include('../librerias/conexion.php');

$libro = $_POST['libro'];

//insertar en la tabla de datos 

if(isset($_POST['subir'])){

  $sql = "INSERT into libros(`libro`) VALUES ('".$libro."')";
  $result = mysqli_query($link, $sql);
  if($result){
    header("Location:../libros.php?libro=ok");
  }else{
    header("Location:../libros.php?libro=ko");
  }

}else{
  header("Location:libros.php?libro=error");
}

  ?>