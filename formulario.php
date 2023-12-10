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
<div class="container" style="padding-top: 2em;background-color: #EDEFF0;border-radius: 10px;">
  <h1>Encuesta de consumo</h1>
  <form class="row g-3" action="insertar.php" method="POST">
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Primer Nombre</label>
        <input name="nom1" type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Segundo Nombre</label>
        <input name="nom2" type="text" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Primer Apellido</label>
        <input name="ape1" type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Segundo Apellido</label>
        <input name="ape2" type="text" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Teléfono</label>
        <input name="tel" type="number" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Correo Electrónico</label>
        <input name="cor" type="email" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">¿Consume sustancias psicoactivas?</label>
        <select id="inputState" class="form-select" name="con">
          <option selected>Escoge una respuesta</option>
          <option >Si</option>
          <option >No</option>
        </select>
    </div>
    <div class="col-md-8">
        <label for="inputState" class="form-label">Sustancia que consume.</label>
        <select id="inputState" class="form-select" name="sus">
          <option selected>Escoge una respuesta</option>
          <option value="Marihuana">Marihuana</option>
          <option value="2cb">2cb</option>
          <option value="Perico">Perico</option>
          <option value="Popper">Popper</option>
          <option value="Extasis">Extasis</option>
          <option value="Ansioliticos">Ansioliticos</option>
          <option value="Bazuco">Bazuco</option>
          <option value="Hongos">Hongos</option>
          <option value="Alcohol">Alcohol</option>
          <option value="Alcohol etílico">Alcohol etílico</option>
          <option value="Acidos">Acidos</option>
          <option value="Alcohol y Cigarrillo">Alcohol y Cigarrillo</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Cantidad que consume</label>
        <input type="text" class="form-control" id="inputPassword4" name="can">
    </div>
    <div class="col-md-8">
        <label for="inputState" class="form-label">¿Ha realizado procesos para dejar de consumir?</label>
        <select id="inputState" class="form-select" name="pro">
          <option selected>Escoge una respuesta</option>
          <option >Si</option>
          <option >No</option>
        </select>
    </div>
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary mb-3" name="btn">Enviar respuesta</button>
    </div>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>