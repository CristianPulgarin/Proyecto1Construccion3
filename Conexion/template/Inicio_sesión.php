<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-
beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
crossorigin="anonymous">
<title>TONIFIT CS</title>
<link rel="stylesheet" href="../public/css.css">
<link rel="shortcut icon" href="img/tonifit.jfif" type="image/x-icon">

</head>

<body>
<div class="head">

<div class="logo">
<a href="#">TONIFIT CS</a>
</div>
<nav class="navbar">
<a href="index.php">Inicio</a>
<a href="#nuestra">Información</a>


</nav>
</div>
<section>

<br><br><br><br>
<!-- FORMULARIO DE INICIO DE SESIÓN -->
<h1 class="text-primary"><strong>INICIO DE SESIÓN</strong></h1>
<div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <form action="../template/login.php" method="get">
    <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'noExiste'){
            ?>
              <div class=" mb-2 mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                <p>El usuario no existe o la contraseña es incorrecta</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php 
                }
            ?> 
    <div class="row pt-4 pb-3">
      <div class="col-3"></div>
        <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Usuario</label>
            <input type="" name="usuario" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese el nombre de usuario">             
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row pt-4 pb-3">
      <div class="col-3"></div>
        <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Cedula</label>
            <input type="" name="cedula" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese la cedula">             
            </div>
            <div class="col-3"></div>
        </div>
          
          <div class="row pt-4 pb-3 text-center">
            <div class="col-4"> </div>
          <div class="col-4" >
            <button class="btn btn-primary" id="btn-agregar">Iniciar Sesión</button>
            
          </div>
          <div class="col-4" > </div>
          </div>
         
          
         
  
    </form>
    <a href="Registro.php"><button type="Registro.php" class="btn btn-primary">REGISTRARSE</button></a>

</div>



    
  
    


</section>



</body>
</html>

<br>

<footer>
    <br>
    <div class="contenedor-footer-all">
        <div class="contenedor-body">

            <div class="colum1">


                <h1><a name="nuestra">NUESTRA UBICACIÓN</a></h1>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.141718138716!2d-75.60387307948803!3d6.245047713635927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44299f3bfc53d1%3A0x3f701
                        1a2b1568b9!2sCra.%2079%20%2337-93%20a%2037-1%2C%20Medell%C3%ADn%2C%20Laureles%2C%20Medell%C3%ADn
                        %2C%20Antioquia!5e0!3m2!1ses!2sco!4v1666586010407!5m2!1ses!2sco" width="400" height="300" style="border:0;" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>


            </div>

            <div class="colum2">
                <br>
                <h1>Redes sociales</h1>

                <div  class="row" >
                    <a href="www.facebook"
                        target="_blank"><img src="../public/img/face.png"></a>
                    <label> Siguenos en facebook</label>

                </div>
                <div class="row">
                    <a href="https://www.instagram" target="_blank"><img
                            src="../public/img/instagram.png"></a>
                    <label> Siguenos en Instagram</label>

                </div>
                <div class="row">
                    <a href="https://www.youtube.com" target="_blank"><img
                            src="../public/img/yout.png"></a>
                    <label> Siguenos en Youtube</label>

                </div>

            </div>

            <div class="colum3">
                <h1>Información</h1>
                <div class="row2">
                    <img src="../public/img/casa.png">
                    <label>Laureles</label>
                </div>
                <div class="row2">
                    <img src="../public/img/tele.png">
                    <label>5418450</label>
                </div>
                <div class="row2">
                    <img src="../public/img/correo.png">
                    <label>tonifitcs@gmail.com</label>
                </div>
            </div>



        </div>

        <div class="contenedor-footer">
            <div class="copyright">
                @2022 | Cristian Pulgarin || Cristian Barbosa || Mateo Jaramillo
            </div>
        </div>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>
</html>