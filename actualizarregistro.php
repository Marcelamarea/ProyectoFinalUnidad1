<?php
if (isset($_POST['btn']) ){
    $id      = $_POST['id'];
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
    
    include 'conexion.php';
    

$consulta = "UPDATE encuesta SET nombrep='$nom1',nombres='$nom2',apellidop='$ape1',apellidos='$ape2',
            telefono='$tel',correo='$cor',consumo='$con',sustancia='$sus',cantidad='$can',proceso='$pro'
            WHERE id=$id";
$query    = mysqli_query($conn,$consulta);

    if($query){
            echo "<script>alert('Se actualizó la respuesta!');
                  window.location.href='listar.php'; 
                  </script>";
    }else{
        echo "mala consulta";
        // echo "<script>alert('Error en el registro!');
        //           window.location.href='formulario.php'; 
        //           </script>";
    }
}else{
    echo "<script>alert('porfavor llena el form');
    window.location.href='formulario.php';</script>";
} 
?>





