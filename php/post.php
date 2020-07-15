<?php 

include('../librerias/conexion.php');

  if (isset($_POST['subir'])){
 
    $name = $_FILES['photo']['name'];
    $type = $_FILES['photo']['type'];
    $data = file_get_contents($_FILES['photo']['tmp_name']);

    $stmt = $conn->prepare("insert into posts(photo, name, mime) values(:photo, :name, :mime)");
    $stmt ->bindParam(':photo', $data);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':mime', $type);
    if ($stmt->execute()){
      header("Location:../inicio.php?photo=ok");
    }else{
      header("Location:../inicio.php?photo=ko");
    }
  }else{
    header("Location:../inicio.php?photo=error");
  }
      ?>





      

 





        
     