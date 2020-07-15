<?php

include('../librerias/conexion.php');

$libro = $_POST['libro'];
$autor = $_POST['autor'];
$review = $_POST['review'];

if(isset($_POST['subir'])){

    $sql = "INSERT into reviews(`libro`, `autor`, `review`) VALUES('".$libro."', '".$autor."', '".$review."')";
    $recomendaciones = mysqli_query($link, $sql);
    if($recomendaciones){
      header("Location:../libros.php?review=ok");
      }else{
        header("Location:../libros.php?review=ko");
      }
  


}else{
    header("Location:libros.php?review=error");
}



?>