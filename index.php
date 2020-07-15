<?php
    include('./librerias/conexion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Font awesome-->
    <script src="js/all.js"></script>
    <!--Bootsrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--tipografias-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <!--Css-->
    <link rel="stylesheet" href="css/style.css">
    <title>Høst | Café, libros & más</title>
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
                        <a class="nav-link" href="#nosotros">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#eventos">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login">Nuestro club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <div class="user-login">
                    <i class="user fas fa-user"></i>
                    <a href="#login">
                        <p>Inicia sesión</p>
                    </a>
                </div>
            </div>
            <!--fin navegador-->
        </nav>
        <!--fin cabecera -->
    </header>
    <!--bienvenidos-->
    <section class="principal">

        <!--seccion bienvenidos-portada-->
        <div class="container bienvenido">
            <div class="row">
                <div class="col-10 col-md-6 col-lg-4 align-content-center texto-principal">
                    <img src="img/logo-claro.svg" alt="logo">
                    <h1>Café, libros, eventos & más</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At incidunt earum quam tenetur quae
                        cumque atque, libero, laborum fuga consequatur magnam quas, facere laboriosam ratione
                        delectus expedita qui veniam sequi.</p>

                    <div class="text-center">
                        <a class="btn btn-primary" id="scroll " href="#login" data-toggle="modal"
                            data-target="#modalRegisterForm">Únete</a>
                        <p>¿Ya tienes cuenta? <a href="#" data-toggle="modal" class="entra"
                                data-target="#exampleModalCenter">Entra</a>.</p>
                        <!-- Modal log in  -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Log in</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!--formulario modal log in --->
                                        <form action="php/login.php" method="POST">
                                            <p><?php if (isset($_GET['message'])) {
                                        echo '<div class="alert alert-warning" role="alert">
                                        <p class="text-center">'.$_GET['message'].'</p>
                                        </div>';
                                         } ?></p>
                                            <div class="form-group">
                                                <label for="mail">Email</label>
                                                <input type="text" name="mail" placeholder="ron@hogwarts.edu"
                                                    class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="contraseña">Contraseña</label>
                                                <input type="password" name="pass" placeholder="*****"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Entrar">

                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- fin modal login --->
                    </div>
                </div>

            </div>
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
        </div>
    </section>
    <!--fin seccion portada-bienvenidos-->
    <!--Prueba form modal-->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title w-100 font-weight-bold">Registrate</h4>
                    <h4>¡Y consigue tu segundo café gratis por unirte!</h4>

                </div>
                <div class="modal-body mx-3">
                    <form action="php/create.php" method="POST">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre</label>
                            <input type="text" id="orangeForm-name" class="form-control validate" name="name">

                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
                            <input type="email" id="orangeForm-email" class="form-control validate" name="email">

                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Contraseña</label>
                            <input type="password" id="orangeForm-pass" class="form-control validate" name="password">

                        </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Registrame</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--fin prueba form modal-->
    <!--log in/sign in-->
    <section id="login" class="scroll">
        <div class="container">
            <div class="row">
                <header class="col-12 col-md-5 header-login">
                    <h2>
                        Reclama tu segundo café gratis al unirte a nuestro club y empieza a disfrutar de sus
                        ventajas.
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laudantium iste sit odit
                        facere omnis optio voluptatem molestias rem sint qui minima molestiae, eum voluptate
                        beatae natus, sed, magnam numquam.</p>
                </header>

                <div class="col-12 col-md-5 offset-md-2">
                    <form class="form-login" action="php/create.php" method="POST">
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="name" placeholder="Luna_LoveGood" class="form-control"></div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" placeholder="lunalunatica@hogwarts.edu"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="contraseña">Contraseña</label>
                            <input type="password" name="password" placeholder="*****" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Unirse">
                            <p>¿Ya tienes cuenta? <a href="#" data-toggle="modal"
                                    data-target="#exampleModalCenter">Entra</a>.</p>
                            <!-- Modal log in  -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Log in</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!--formulario modal log in --->
                                            <form action="php/login.php" method="POST">
                                                <p><?php if (isset($_GET['message'])) {
                                        echo '<div class="alert alert-warning" role="alert">
                                        <p class="text-center">'.$_GET['message'].'</p>
                                        </div>';
                                         } ?></p>
                                                <div class="form-group">
                                                    <label for="mail">Email</label>
                                                    <input type="text" name="mail" placeholder="ron@hogwarts.edu"
                                                        class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="contraseña">Contraseña</label>
                                                    <input type="password" name="pass" placeholder="*****"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Entrar">

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- fin modal login --->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Codigo metodo get de validacion del formulario-->
    <?php
if(isset($_GET['createuser'])){
  if($_GET['createuser'] == 'ok'){
    echo "";
  }else if($_GET['createuser'] == 'ko'){
    echo 'Error';
  }else if($_GET['createuser'] == 'error'){
      echo 'Error';
  }
}

?>
    <?php
      $sql= "SELECT * FROM usuarios";
      $result = mysqli_query($link,$sql);

      if (!$result) {
        echo "La tabla está vacía";
      }
      else{
        while($row = mysqli_fetch_array($result)){
          echo '';
        }
      }
    ?>
    <!--fin de la seccion de sign in -->
    <!--eventos-->
    <section id="eventos" class="eventos">
        <header class="header-eventos text-center">
            <h2><a href="#" data-toggle="modal" data-target="#reservar">Próximos eventos</a></h2>

            <!-- Modal log in  -->
            <div class="modal fade" id="reservar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Reserva</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
        if(isset($_GET['envia'])){
          switch ($_GET['envia']){
            case 'ok':
              echo ' <div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>¡Enviado!</strong> 
         </div>';
            break;
            case 'error':
            echo '  <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>¡Error!</strong>Faltan campos por rellenar.
          </div>';
          break;
            case 'error_cond':
            echo '  <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>¡Error!</strong> No has aceptado las condiciones.
          </div>';
            case 'ko':
            echo  '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>¡Error!</strong>Intentalo más tarde.
          </div>';
          break;
          }
        }
    ?>
                         <!--formulario modal log in --->
                            <form action="php/reservar.php" method="POST">
                                <div class="form-group">
                                    <label for="mail">Nombre</label>
                                    <input type="text" name="nombre" placeholder="Seamus" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="mail">Email</label>
                                    <input type="text" name="mail" placeholder="seamus@hogwarts.edu"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="evento">Evento</label>
                                    <input type="text" class="form-control" name="evento"
                                        placeholder="Escribe aquí que evento quieres reservar y cuantos seréis.">
                                </div>
                                <div class="form-group condiciones">
                                    <label><input type="checkbox" name="conditions"> He leído y acepto las
                                        condiciones</label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Reservar">

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- fin modal login --->
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1  evento-proximo">
                    <h4>19 Oct</h4>
                    <h3><a href="#">Expertos chocolateros</a></h3>
                    <button class="btn btn-primary">Reserva</button>
                </div>
                <div class="col-12 col-md-10 col-lg-5  evento-1">
                    <div class="imagen"><a href=""><img src="img/evento-2.jpg" alt="evento"></a></div>
                    <div class="texto">
                        <h4><a href="#" class="reservar"><i class="far fa-bookmark"></i></a><a href="#"> Cita a
                                ciegas</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-5 evento-2">
                    <div class="imagen"><a href=""><img src="img/evento1.jpg" alt="evento"></a></div>
                    <div class="texto">
                        <h4><a href="#" class="reservar"> <i class="far fa-bookmark"></i></a><a href="#"> Taller de
                                fotografía</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-5  evento-1">
                    <div class="imagen"><a href=""><img src="img/evento-3.jpg" alt="evento"></a></div>
                    <div class="texto">
                        <h4> <a href="#" class="reservar"><i class="far fa-bookmark"></i></a><a href="#"> Masterclass de
                                ilustración</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-5  evento-2">
                    <div class="imagen"><a href=""><img src="img/evento4.jpg" alt="evento"></a></div>
                    <div class="texto">
                        <h4><a class="reservar" href="#"><i class="far fa-bookmark"></i></a><a href="#"> Club del
                                libro</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!--fin row -->
            </div>
            <!--fin container-->
        </div>
    </section>
    <!--fin eventos-->
    <!--sobre nosotros-->
    <section id="nosotros">
        <div class="contenido-nosotros">
            <div class="row">
                <div class="col-10 col-md-4 offset-1 foto-nosotros">
                    <img src="img/filosofia.jpg" alt="cafeteria">
                </div>
                <div class="col col-md-6 texto-nosotros">
                    <h2>Nuestra filosofía</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, iure dolores! Sunt aut
                        possimus hic totam! Perspiciatis aliquam, consequuntur minus excepturi, sit voluptates
                        accusantium facere ullam cum, expedita dolores hic.</p>
                </div>
            </div>
        </div>
    </section>
    <!--fin sobre nosotros-->
    <!--libros-->
    <section class="libros">
        <div class="container ">
            <div class="row">
                <div class="col-12 col-md-6 order-md-2 offset-md-1 foto-libros">
                    <img src="img/libros.jpg" alt="libros">
                </div>
                <div class="col-12 col-md-5 order-md-1 my-auto">
                    <div class="texto-libros ">
                        <h3>Un libro por otro</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, iure dolores! Sunt aut
                            possimus hic totam! Perspiciatis aliquam, consequuntur minus excepturi, sit
                            voluptates
                            accusantium facere ullam cum, expedita dolores hic.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--fin libros-->
    <!--opiniones-->
    <section class="opiniones">
        <div class="container">
            <div class="row">
                <header class="col-12 col-md-4 align-self-md-center header-opiniones">
                    <h3>Lo que dicen nuestros clientes sobre nosotros</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, eaque eligendi error sed a sequi.
                        Tenetur quaerat aspernatur sequi ab odit, modi dolore, nam omnis dicta repudiandae obcaecati id
                        reiciendis!</p>
                </header>
                <div class="col-12 col-md-7 offset-md-1">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="foto-opiniones">
                                    <img src="img/cliente.jpg" alt="cliente">
                                </div>
                                <div class="texto-opiniones">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis recusandae
                                        dolores consequuntur eligendi explicabo. Odio voluptatem, consequuntur ex in
                                        dolorum possimus hic, nostrum excepturi deleniti ad, perferendis ratione.
                                        Quibusdam, vero.</p>
                                    <br>
                                    <p>Eric</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="foto-opiniones">
                                    <img src="img/cliente2.jpg" alt="cliente">
                                </div>
                                <div class="texto-opiniones">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis recusandae
                                        dolores consequuntur eligendi explicabo. Odio voluptatem, consequuntur ex in
                                        dolorum possimus hic, nostrum excepturi deleniti ad, perferendis ratione.
                                        Quibusdam, vero.</p>
                                    <br>
                                    <p>Miriam</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="foto-opiniones">
                                    <img src="img/cliente3.jpg" alt="cliente">
                                </div>
                                <div class="texto-opiniones">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis recusandae
                                        dolores consequuntur eligendi explicabo. Odio voluptatem, consequuntur ex in
                                        dolorum possimus hic, nostrum excepturi deleniti ad, perferendis ratione.
                                        Quibusdam, vero.</p>
                                    <br>
                                    <p>Marta</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <i class="fas fa-chevron-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--fin del row-->
            </div>
            <!--fin del container-->
        </div>
        <!--fin de opiniones-->
    </section>
    <!--galeria-->
    <section class="galeria">
        <div class="container">
            <header class="header-galeria">
                <h3>
                    Galeria de fotos
                </h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut facere modi fugit quidem officia
                    quibusdam
                    voluptate, quis accusamus ex, eveniet a. Eos eius inventore quasi ratione tenetur cumque nihil
                    sit.Lorem
                    ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
            </header>
            <div class="galeria-grid">
                <div class="row">
                    <div class="col-6 col-md-4 img-galeria">
                        <a href="img/galeria1.jpg"><img class="img-fluid" src="img/galeria1.jpg" alt=""></a>
                    </div>
                    <div class="col-6 col-md-4 img-galeria">
                        <a href="img/galeria2.jpg"><img class="img-fluid " src="img/galeria2.jpg" alt=""></a>
                    </div>
                    <div class="col-12 col-md-4 img-galeria">
                        <a href="img/galeria3.jpg"><img class="img-fluid" src="img/galeria3.jpg" alt=""></a>
                    </div>
                    <div class="col-6 col-md-4 img-galeria">
                        <a href="img/galeria4.jpg"><img class="img-fluid" src="img/galeria4.jpg" alt=""></a>
                    </div>
                    <div class="col-6 col-md-4 img-galeria">
                        <a href="img/galeria5.jpg"><img class="img-fluid" src="img/galeria5.jpg" alt=""></a>
                    </div>
                    <div class="col-6 col-md-4 img-galeria">
                        <a href="img/galeria6.jpg"><img class="img-fluid" src="img/galeria6.jpg" alt=""></a>
                    </div>
                    <div class="col-6 col-md-4 img-galeria">
                        <a href="img/galeria7.jpg"><img class="img-fluid" src="img/galeria7.jpg" alt=""></a>
                    </div>
                    <div class="col-6 col-md-4 img-galeria">
                        <a href="img/galeria8.jpg"><img class="img-fluid" src="img/galeria8.jpg" alt=""></a>
                    </div>
                    <div class="col-6 col-md-4 img-galeria">
                        <a href="img/galeria9.jpg"><img class="img-fluid" src="img/galeria9.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!--fin galeria-->
        <!--footer-->
    </section>
    <footer class="footer-principal">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 order-md-2 contacto">
                    <h3>Contacto</h3>
                    <p>
                        <span> <i class="fas fa-map-marker-alt"></i></span> c/Honeyducks, 30, 46070
                        <br>
                        <span><i class="fas fa-phone"></i></span> 1234 10027-0000
                        <br>
                        <span><i class="fas fa-mobile-alt"></i></span> +1 987 654 3210
                        <br>
                        <span><i class="far fa-envelope"></i> </span>allen@host.com
                    </p>
                </div>
                <div class="col-12 col-md-12 order-md-1 rrss">
                    <nav>
                        <ul>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-md-6 order-md-3 horario">
                    <h3>Horario</h3>
                    <p>
                        <span><i class="fas fa-calendar-day"></i> </span>Martes a domingo
                        <br>
                        <span><i class="far fa-clock"></i> </span> de 10h a 22h
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--fin del footer-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>