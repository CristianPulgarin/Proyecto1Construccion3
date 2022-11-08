<?php
include_once ('conexion.php');
$nombreU = $_POST['name'];
$apellidoU=$_POST['lastname'];
$cedulaU=$_POST['cc'];
$usuario=$POST['usuario'];
$generoU=$_POST['genero'];
$emailU=$_POST['email'];
$num=$POST['num'];

$con=new Conexion();
$con=$con->Conectar();
if($con){
$sql="INSERT INTO tblUsuario ('nombre','apellido','cedula','usuario','genero','email','numero') VALUES ('$nombreU','$apellidoU','$cedulaU','$usuario','$generoU','$emailU','$num')";
    
    $consulta=$con->prepare($sql);
    $consulta->execute();
}


echo $nombreEstudiante;
?>
