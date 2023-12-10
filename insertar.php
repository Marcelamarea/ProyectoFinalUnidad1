<?php
if (isset($_POST['btn']) ){
    include 'conexion.php';
    $nom1    = $_POST['nom1'];
    $nom2    = $_POST['nom2'];
    $ape1    = $_POST['ape1'];
    $ape2    = $_POST['ape2'];
    $tel     = $_POST['tel'];
    $cor     = $_POST['cor'];
    $con     = $_POST['con'];
    $sus     = $_POST['sus'];
    $can     = $_POST['can'];
    $pro     = $_POST['pro'];

    

$consulta = "INSERT INTO encuesta(nombrep,nombres,apellidop,apellidos,telefono,correo,consumo,sustancia,cantidad,proceso)
                            VALUES('$nom1','$nom2','$ape1','$ape2','$tel','$cor','$con','$sus','$can','$pro')";
$query    = mysqli_query($conn,$consulta);

    if($query){
            echo "<script>alert('Se guardó la respuesta!');
                  window.location.href='listar.php'; 
                  </script>";
    }else{
        
         echo "<script>alert('Error en el registro!');
                   window.location.href='formulario.php'; 
                  </script>";
    }
}else{
    echo "<script>alert('Por favor llena el formulario');
    window.location.href='formulario.php';</script>";
} 
?>





