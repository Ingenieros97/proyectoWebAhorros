<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <script type="text/javascript" src="../../lib/jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../../lib/popper/popper.min.js"></script>
    <link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../lib/bootstrap/css/estilo.css">
    <link rel="stylesheet" href="../../lib/bootstrap/css/registro.css">
    <link rel="stylesheet" href="../../style.css">
    <script type="text/javascript" src="../../lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="funciones.js"></script>
    <title>Registrar</title>
  </head>
  <body>

    <br>

    <script type="text/javascript">
    function cambiaFondo(x){
      console.log(x.value);

      var body = document.getElementById("body");
      body.style.backgroundColor = x.value;

      var body = document.getElementById("body");
      body.style.backgroundColor = x.value;

    }

    </script>




  </head>

<body id="body">

  <br>
  <form class="form-inline my-2 my-lg-0" id="inicio" >
  </br>


  <ul  class="nav">
  <img src="../../img/Logo.png" class="d-block" alt="..." width="50" height="50">  &nbsp&nbsp&nbsp

    <a &nbsp class="navbar-brand" href="#">AF</a>
  <li><a href="../index.php"><span class="icon-bank-building"></span>  INICIO </a></li>
  <li><a href="gastos.php"><span class="icon-dollar-sign-and-piles-of-coins"></span> GASTOS </a></li>
<li><a href="estadisticas.php"><span class="icon-graph-analysis"></span> ESTADISTICAS </a></li>
<li><a href="factura.php"><span class="icon-signing-the-contract"></span> FACTURA </a></li>
<li><a href="genera_factura.php"><span class="icon-task-complete"></span>  GENERAR FACTURA </a></li>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


<li>
  <a href="perfil.php"><span class="icon-business-presentation"></span> PERFIL </a>
  <ul>
    <li><a href="../../index.php"><span class="icon-remove-user"></span> CERRAR SESIÓN </a></li>
  </ul>

</li>&nbsp&nbsp


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="fondo" id="fondo" onchange="cambiaFondo(this)">




  <option value=" #FEF9E7"><span class="icon-light-up"></span> Light </option>
  <option value="black"><span class="icon-moon"></span> Dark </option>




</select>

</ul>




</form>

<div class="card card-container">
    <h2>CREAR CUENTA</h2>
    <form method="post" action="regitro.php" name="frm_registro" id="frm_registro">
      <div class="row">
        <div class="col">
          <input type="text" id ="txt_correo" name="txt_correo" class="form-control" placeholder="Correo" value="" autofocus="" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" id ="txt_nombres" name="txt_nombre" class="form-control" placeholder="Nombre(s)" value="" autofocus="" required>
        </div>
        <div class="col">
          <input type="text" id="txt_apellidos" name="txt_apellidos" class="form-control" placeholder="Apellido(s)" value="" autofocus="" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" id="txt_usuario" name="txt_usuario" class="form-control" placeholder="Usuario" value="" autofocus="" required>
        </div>
        <div class="col">
          <input type="password" id="txt_pass" name="txt_pass" class="form-control" placeholder="Contraseña" value="" autofocus="" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label>Fecha de Nacimiento</label>
        </div>
        <div class="col">
          <input type="date" id="d_fechaN" name="d_fechaN">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" id="txt_direccion" name="txt_direccion"  class="form-control" placeholder="Dirección" value="" autofocus="" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" id="txt_rfc" name="txt_rfc" class="form-control" placeholder="RFC" value="" autofocus="" required>
        </div>
        <div class="col">
          <input type="text" id="txt_ocupacion" name="txt_ocupacion" class="form-control" placeholder="Ocupación" value="" autofocus="" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" id="txt_ingresos" name="txt_ingresos" class="form-control" placeholder="Ingresos" value="" autofocus="" required>
        </div>
      </div>
        <div class="row">
          <div class="col">
          <label>Genero</label>
        </div>
        <div class="col">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Masculino</label>
          </div>
        </div>
        <div class="col">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Femenino</label>
          </div>
        </div>
      </div>
      <div id="div_mensaje">
      </div>
      <div>
        <button  type="button" class="btn btn-lg btn-success btn-block btn-signin" name="registar" id="btn_registrar">Registrar</button>
      </div>
    </form>
  </div>

<footer class="page-footer font-small unique-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1">Siguenos en: </h5>
        </li>
        <li class="list-inline-item">
          <a href="" class="btn btn-outline-white btn-rounded"><span class="icon-facebook-with-circle"></span> Facebook</a>
            <a href="" class="btn btn-outline-white btn-rounded"><span class="icon-twitter"></span> Twitter</a>
        </li>
      </ul>
      <!-- Call to action -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a >Ahorro Fácil</a>
        <a href="registro.php" class="btn btn-outline-white btn-rounded">Sign up!</a>

    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  </body>

</html>
