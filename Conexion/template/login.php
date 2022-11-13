<?php
session_start();
include_once 'conexion.php';
  $usuario=isset($_POST['usuario'])?$_POST['usuario']:"";
  $cedula=isset($_POST['cedula'])?$_POST['cedula']:"";
  $con=new Conexion();
  $con=$con->conectar();  


  if($con){      
      $sql="SELECT * FROM `tblusuario` WHERE usuario='$usuario' AND cedula='$cedula'";  
          $consulta=$con->prepare($sql);
        
          $consulta->execute();  
          
          if ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
    
                      session_start();                      
                  
                      $_SESSION['usuario'] = $usuario; 
                      header("Location: ../template/Inicio_sesión.php");
                  }                     
                    else {
              
                      header('Location: ../template/index.php?mensaje=noExiste'); 
                    }                 
      
          }
        
        
?>

  
   
  