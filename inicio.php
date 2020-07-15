<?php
  session_start();
 include('./librerias/conexion.php');
 if (isset($_SESSION['usuarios_id'])) {
?>


<?php 
	// conectarse a la base de datos
	$con = mysqli_connect('localhost', 'root', '', 'host_db');

//si se le da like a la foto

	if (isset($_POST['liked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "INSERT INTO likes (usuarioid, postid) VALUES (1, $postid)");
		mysqli_query($con, "UPDATE posts SET likes=$n+1 WHERE id=$postid");

		echo $n+1;
		exit();
  }
	// sacar los post de la base de datos
	$posts = mysqli_query($con, "SELECT * FROM posts");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Høst | Club Høst </title>
  <!--Font Awesome-->
  <script src="js/all.js"></script>
  <!--Bootsrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--tipografias-->
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
  <!--Css-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/inicio.css">
</head>

<body>

<header>
        <!--navegador/cabecera seccion bienvenidos-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
           <span class="logo"> <a href="index.php"><img src="img/logo-claro.png" alt=""></a></span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Galeria clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#eventos">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="libros.php">Club de lectura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
               
                       <div class="user-logout" >
                             <i class="user fas fa-user"></i>
                          <p> <?php  
                              echo $_SESSION['usuarios_name'];
                                    ?></p>

                          <a href="php/logout.php"><i class=" logout fas fa-sign-out-alt"></i></a>
                        </div>
                        
                  </div>
                <!--fin navegador-->
        </nav>
        <!--fin cabecera -->
    </header>
  <!--Posts---->
  <h2>¡Vota tu foto favorita!</h2>
  <h4>O sube tu <a href="#" data-toggle="modal" data-target="#exampleModalCenter">foto favorita</a>en nuestro local.</h4>
        <!-- Modal subir foto -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Subir foto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                        <!--formulario modal --->
                                        <form action="php/post.php" method="POST" enctype="multipart/form-data">
                                        <input type="file"   class="form-control" placeholder="Sube aquí tu foto en nuestra cafeteria" name="photo">
                                        <input type="submit" value="Subir" name="subir">
                                        </form>
                                </div>

                        </div>
                </div>
        </div>
        <!-- fin modal --->
       
    <div class="contenedor-posts">
      
          <?php while ($row = mysqli_fetch_array($posts)) { ?>
            <!--Posts subidos-->
            <div class="posts">
              <div class="imagenes">
                 <?php 

                  echo '<img src="data:image/jpeg;base64, '.base64_encode($row["photo"]).'" style="width:300px;">' 
                
                 ?>
                    </div>
              <div class="likes">
                <?php 
				            // determinar si el usuario ya ha dado like al post
					      $results = mysqli_query($con, "SELECT * FROM likes WHERE usuarioid=1 AND postid=".$row['id']."");

					        if (mysqli_num_rows($results) == 1 ): ?>
                        <!-- si ya le ha dado like -->
                   <i class="like fas fa-heart" data-id="<?php echo $row['id']; ?>"></i>
                      <?php else: ?>
                       <!-- si aun no le ha dado like -->
                    <span class="like fas fa-heart" data-id="<?php echo $row['id']; ?>"></span>
                    <?php endif ?>

                      <span class="likes_count"><?php echo $row['likes']; ?> likes</span>
                      </div>
                  </div>
               <?php } ?>  
    </div>
    <!--fin container---->
 <!--footer portada-->

 <footer class="col-12 footer-bienvenidos  text-center">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-2 ">
                        <nav>
                            <ul>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-12 col-md-6 order-md-1">
                        <p><i class="fas fa-map-marker-alt"></i> C/ Honeyducks, 20, Hogsmade, 07011 </p>
                    </div>
                </div>
            </footer>


  <!-- script de jquery -->
<script src="js/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function () {
      // cuando el usuario le da a me gusta
      $('.like').on('click', function () {
        var postid = $(this).data('id');
        $post = $(this);

        $.ajax({
          url: 'inicio.php',
          type: 'post',
          data: {
            'liked': 1,
            'postid': postid
          },
          success: function (response) {
            $post.parent().find('span.likes_count').text(response + " likes");
            $post.addClass('hide');
            $post.siblings().removeClass('hide');
          }
        });
      });
    });
  </script>
  <?php 
 }
 else{
  header('Location:./inicio.php');
 }
?>

    <!--fin del footer-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>