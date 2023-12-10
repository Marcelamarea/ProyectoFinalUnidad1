<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/normailze.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css"> -->
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body >
<div class="navbar fondo">
     <div class="navbar-inner ">
          <div class="container">      
                Psicología
                  <!-- <img src="images/logo.png" width="120" height="40" alt="Logo" /> -->
                  <!-- This is website logo -->
              
              <!-- Navigation button, visible on small resolution -->
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <i class="icon-menu"></i>
              </button>
              <!-- Main navigation -->
              <div class="nav-collapse fondo" style="align-content: right;">
                  <ul class="nav" id="top-navigation" style="align-content: right;">
                      <li><a href="index.html" style="margin-left: 7em; background-color: aquamarine;padding: 2em;">INDEX</a></li>
                      <li><a href="formulario.php" style="background-color: aquamarine;padding: 2em;">ENCUESTA</a></li>
                      <li><a href="listar.php" style="background-color: aquamarine;padding: 2em;">LISTADO</a></li>
                  </ul>
              <!-- </div> -->
              <!-- End main navigation -->
          </div>
      </div>
  </div>
</div>
    <h1 style="text-align: center;color: aqua;text-shadow: green;">Respuestas a encuesta</h1>
    <div class="container">
      <div class="container-fluid" style="background-color: aqua;padding: 1em;">
          
      </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover	table-borderless table-primary align-middle">
                <thead class="table-light">
                    <caption>Encuesta</caption>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Consume</th>
                        <th>Sustancia</th>
                        <th>Cantidad</th>
                        <th>Lleva proceso</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php
                include "conexion.php";
                
                $query = "SELECT * FROM encuesta";
                $cons = mysqli_query($conn, $query);
                while ($vec = mysqli_fetch_array($cons)) { ?>
                <tr class="table-primary">
                    <td><?php echo $vec[1]." ".$vec[2]; ?></td>
                    <td><?php echo $vec[3]." ".$vec[4]; ?></td>
                    <td><?php echo $vec[5]; ?></td>
                    <td><?php echo $vec[6]; ?></td>
                    <td><?php echo $vec[7]; ?></td>
                    <td><?php echo $vec[8]; ?></td>
                    <td><?php echo $vec[9]; ?></td>
                    <td><?php echo $vec[10]; ?></td>
                    <td>
                        <a href="actualizar.php?id=<?php echo $vec[0]; ?>">Actualizar</a>
                    </td>
                </tr>
            <?php }
            
            ?>
                </tbody>
            </table>
        </div>
    </div>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>