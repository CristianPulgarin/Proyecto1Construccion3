<?php
include_once("../template/conexion.php");
$con=new Conexion();
$con = $con->conectar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro</title>
<link rel="stylesheet" href="../public/css.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-
beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
crossorigin="anonymous">
<link rel="shortcut icon" href="img/tonifit.jfif" type="image/x-icon">
</head>
<body>

    <div class="head">

        <div class="logo">
        <a href="#">TONIFIT CS</a>
        </div>
        <nav class="navbar">
        <a href="index.php">Inicio</a>
        <a href="registro.php">Registrarse</a>
        
        
        
        </nav>
        </div>

        <header class="content header">
            <h2 class="title">CLIENTES TONIFIT CS</h2>
            <br><br>
            <p>NO DEJES PASAR LA OPORTUNIDAD DE SER PARTE DE NOSOTROS, REGISTRATE AHORA, ES TOTALMENTE <strong>GRATIS</strong> 
            <center><p>ACTUALMENTE CONTAMOS CON GRANDES DESCUENTOS, NO TE LOS PIERDAS</p></center>
            
            <div class="btn-home">
            </div>
            </header>

<br>
<center><h1 class="text-primary">CLIENTES REGISTRADOS</h1></center>

<div class="row pt-4">
            <div class="col-2"></div>
            <div class="col-8">

              <table class="table" id="lista">
              <thead>
    <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Apellido</th>
    <th scope="col">Genero</th>
      <th scope="col">Usuario</th>
      <th scope="col">Celular</th>
      <th scope="col">Cedula</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  
      <?php
      if($con){
        $sql = "SELECT * FROM tblusuario";
        $consulta=$con->prepare($sql);
        $consulta->execute();
        while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){   
      ?> 
      <tbody>
    <tr>
      <td><?php echo $fila['nombre']?> </td>
      <td><?php echo $fila['apellido']?> </td>
      <td><?php echo $fila['genero']?> </td>
      <td><?php echo $fila['usuario']?> </td>
      <td><?php echo $fila['numero']?> </td>
      <td><?php echo $fila['cedula']?> </td>
      <td><?php echo $fila['email']?> </td>
      
    </tr>
    
    <?php
  }
}
    ?>

</tbody>
                
                
                </table>
              </div>
              <div class="col-3"></div>
  
            </div>



      <br><br>      

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



</html>