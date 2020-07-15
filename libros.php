<?php
  session_start();
 include('./librerias/conexion.php');
 if (isset($_SESSION['usuarios_id'])) {
?>


<?php 
	// conectarse a la base de datos
	$con = mysqli_connect('localhost', 'root', '', 'host_db');

//si se le da like a la foto

	if (isset($_POST['voted'])) {
		$libro_id = $_POST['libro_id'];
		$result = mysqli_query($con, "SELECT * FROM libros WHERE id=$libro_id");
		$row = mysqli_fetch_array($result);
		$n = $row['votos'];

		mysqli_query($con, "INSERT INTO libros_votos (usuario_id, libro_id) VALUES (1, $libro_id)");
		mysqli_query($con, "UPDATE libros SET votos=$n+1 WHERE id=$libro_id");

		echo $n+1;
		exit();
  }
	// sacar los post de la base de datos
	$libros = mysqli_query($con, "SELECT * FROM libros");
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
                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                crossorigin="anonymous">
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
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                        <li class="nav-item">
                                                <a class="nav-link" href="index.php">Sobre nosotros</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="#">Eventos</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="#">Nuestro club</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="contacto.php">Contacto</a>
                                        </li>
                                </ul>

                                <div class="user-logout">
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
        <div class="contenedor">
        <section class="proximo-libro">
        <!--Posts---->
        <h2>¡Elige el próximo libro!</h2>
        <h4>O sugierenos <a href="#" data-toggle="modal" data-target="#exampleModalCenter">un libro</a>.</h4>
        <!-- Modal   -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Introduce tu libro</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                        <!--formulario modal--->
                                        <form action="php/libro.php" method="POST">
                                                <p><?php if (isset($_GET['message'])) {
                                        echo '<div class="alert alert-warning" role="alert">
                                        <p class="text-center">'.$_GET['message'].'</p>
                                        </div>';
                                         } ?></p>
                                                <div class="form-group">
                                                        <label for="mail">Libro: </label>
                                                        <input type="text" name="libro"
                                                                placeholder="El señor de los Anillos - J.R.Tolkien"
                                                                class="form-control">
                                                </div>
                                                <div class="form-group">
                                                        <input type="submit" value="Subir" name="subir">

                                                </div>
                                        </form>
                                </div>

                        </div>
                </div>
        </div>
        <!-- fin modal--->
       
       

                <div class="contenedor-libros">

                        <?php while ($row = mysqli_fetch_array($libros)) { ?>
                        <!--Posts subidos-->
                        <div class="libros">
                                <div class="libro">
                                        <ul>
                                                <?php 

                  echo '<li><i class=" icono-libro fas fa-book-open"></i> '.$row["libro"].'</li>';
                
                 ?>
                                        </ul>

                                </div>
                                <div class="votos">
                                        <?php 
		// determinar si el usuario ya ha dado like al post
                 $results = mysqli_query($con, "SELECT * FROM libros_votos WHERE usuario_id=1 AND libro_id=".$row['id']."");

	        if (mysqli_num_rows($results) == 1 ): ?>
                                        <!-- si ya le ha dado like -->
                                        <i class="like  marcar fas fa-bookmark" data-id="<?php echo $row['id']; ?>"></i>
                                        <?php else: ?>
                                        <!-- si aun no le ha dado like -->
                                        <span class="like marcar fas fa-bookmark"
                                                data-id="<?php echo $row['id']; ?>"></span>
                                        <?php endif ?>

                                        <span class="likes_count"><?php echo $row['votos']; ?> votos</span>
                                </div>
                        </div>
                        <?php } ?>


                </div>
                </section>
                <section class="recomendaciones">

                        <h3>Encuentra tu próximo libro entre las recomendaciones de nuestros clientes.</h3>
                        <h4><a href="#" data-toggle="modal" data-target="#reviews">¡O recomiendanos tu libro
                                        favorito!</a></h4>
                        <div class="modal fade" id="reviews" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Tu
                                                                recomendación:</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                        <!--formulario modal log in --->
                                                        <form action="php/review.php" method="POST">

                                                                <div class="form-group">
                                                                        <label for="libro">Libro: </label>
                                                                        <input type="text" name="libro"
                                                                                placeholder="En el camino"
                                                                                class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="mail">Autor: </label>
                                                                        <input type="text" name="autor"
                                                                                placeholder="Jack Kerouac"
                                                                                class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="mail">Review (sin spoilers ;) ):
                                                                        </label>
                                                                        <textarea name="review"
                                                                                placeholder="Jazz, fiestas y carreteras infinitas. ¿Suena bien no?"
                                                                                class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                        <input type="submit" value="Subir" name="subir">

                                                                </div>
                                                        </form>
                                                </div>

                                        </div>
                                </div>
                        </div>
                        <!-- fin modal review--->
                        <div class="reviews">
              
                                 <?php
                                $sql= "SELECT * FROM reviews";
                                $recomendaciones = mysqli_query($link, $sql);

                                if(!$recomendaciones){
                                        echo "No hay recomendaciones aún.";

                                }else{
                                        while($row = mysqli_fetch_array($recomendaciones)){
                                                echo'<div class="review">
                                              
                                               <h4>'.$row["libro"].'</h4>
                                                <h5>'.$row["autor"].'</h5>
                                                <p>'.$row["review"].'</p>
                                                </div>';
                                        }
                                }

                                ?>

                             

                        </div>

                        </section>
        
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
        </div>

        <!-- script de jquery -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script>
                $(document).ready(function () {
                        // cuando el usuario le da a me gusta
                        $('.like').on('click', function () {
                                var libro_id = $(this).data('id');
                                $libro = $(this);

                                $.ajax({
                                        url: 'encuesta.php',
                                        type: 'post',
                                        data: {
                                                'voted': 1,
                                                'libro_id': libro_id
                                        },
                                        success: function (response) {
                                                $libro.parent()
                                                        .find(
                                                                'span.likes_count'
                                                                )
                                                        .text(response +
                                                                " votos"
                                                        );
                                                $libro.addClass(
                                                        'hide'
                                                        );
                                                $libro.siblings()
                                                        .removeClass(
                                                                'hide'
                                                        );
                                        }
                                });
                        });
                });
        </script>
        <?php 
 }
 else{
  header('Location:./libros.php');
 }
?>

        <!--fin del footer-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
        </script>
</body>

</html>