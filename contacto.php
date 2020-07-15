<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Høst | Contacto</title>

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
    <link rel="stylesheet" href="css/contacto.css">
    <!---Swipebox--->
    <link rel="stylesheet" href="src/css/swipebox.css">

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
                        <a class="nav-link" href="index.php#nosotros">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#eventos">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#login">Nuestro club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <div class="user-login" >
                             <i class="user fas fa-user"></i>
                             <a href="#login"> <p>Inicia sesión</p> </a>
                        </div>
                  </div>


                <!--fin navegador-->
        </nav>
        <!--fin cabecera -->
    </header>
    <div class="contacto">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-5 col-lg-5 form-contacto">
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
                    <form action="php/contestacion.php" method="POST">
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" class="form-control" name="name" placeholder="Ginny">
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" name="email" class="form-control" placeholder="ginny@hogwarts.com">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje: </label>
                            <textarea name="message" class="form-control" placeholder="Hola!"></textarea>
                        </div>
                        <div class="form-group condiciones">
                            <label><input type="checkbox" name="conditions"> He leído y acepto las condiciones</label>
                        </div>
                        <div class="form-group enviar">
                            <input type="submit" value="Enviar">
                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-5 col-lg-5 mapa">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.2832873351654!2d2.3460897299237335!3d48.85280818250315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671e11e57b6ff%3A0x1338ace04de752b3!2sShakespeare%20and%20company!5e0!3m2!1ses!2ses!4v1580922891062!5m2!1ses!2ses"
                        width="90%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                </div>
            </div>
        </div>
    </div>

    <footer class="col-12 footer-contacto  text-center">
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    

</body>

</html>