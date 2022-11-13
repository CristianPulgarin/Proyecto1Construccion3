<?php
include_once ('conexion.php');
$nombreU = $_POST['name'];
$apellidoU=$_POST['lastname'];
$cedulaU=$_POST['cc'];
$usuario=$_POST['usuario'];
$generoU=$_POST['genero'];
$emailU=$_POST['email'];
$num=$_POST['num'];

$con=new Conexion();
$con=$con->Conectar();
if($con){
$sql="INSERT INTO `tblusuario`(`nombre`, `apellido`, `cedula`, `usuario`, `genero`, `email`, `numero`) VALUES ('$nombreU','$apellidoU','$cedulaU','$usuario','$generoU','$emailU','$num')";
    
    $consulta=$con->prepare($sql);
    $consulta->execute();
}


header('Location: ../template/registro.php');
?>
