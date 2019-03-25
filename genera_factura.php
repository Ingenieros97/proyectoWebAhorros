<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <script type="text/javascript" src="../lib/jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../lib/popper/popper.min.js"></script>
      <script type="text/javascript" src="funcionG.js"></script>
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/bootstrap/css/estilo.css">
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../lib/bootstrap/js/bootstrap.js"></script>
    <title>Generar Factura</title>
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
  <img src="../img/Logo.png" class="d-block" alt="..." width="50" height="50">  &nbsp&nbsp&nbsp

    <a &nbsp class="navbar-brand" href="#">AF</a>
  <li><a href="../index.php"><span class="icon-bank-building"></span>  INICIO </a></li>
  <li><a href="gastos.php"><span class="icon-dollar-sign-and-piles-of-coins"></span> GASTOS </a></li>
<li><a href="estadisticas.php"><span class="icon-graph-analysis"></span> ESTADISTICAS </a></li>
<li><a href="genera_factura.php"><span class="icon-task-complete"></span>  GENERAR FACTURA </a></li>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<li>
  <a href="perfil.php"><span class="icon-business-presentation"></span> PERFIL </a>
  <ul>
    <li><a href="../index.php"><span class="icon-remove-user"></span> CERRAR SESIÓN </a></li>
  </ul>

</li>&nbsp&nbsp


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="fondo" id="fondo" onchange="cambiaFondo(this)">




  <option value=" #FEF9E7"><span class="icon-light-up"></span> Light </option>
  <option value="black"><span class="icon-moon"></span> Dark </option>




</select>

</ul>




</form>

<br>


<div class="container">
  <div class="row">
    <div class="col-sm-4">



    </div>
    <div class="col-sm-4">
    </div>
  </div>


<div class="card text-center">
  <div class="card-header ">
  </div>
  <div class="card-body">
    <h3 align = left class="card-title">No.Factura#</h3>
    <h3 align = left class="card-title">Fecha:</h3>
    <table class="table table-success">
      <thead>
        <tr>

          <th scope="col">Servicio</th>
          <th scope="col">Costo</th>
          <th scope="col">Descripción</th>
          <th scope="col">Fecha</th>
        </tr>
      </thead>

    </table>
<div class="container">
  <form id="frm_factura">
    <div class="row">
<div class=" col-sm-3 col-md-3">
 <input type="text" name="nombre" id="txt_nombre"   placeholder="Servicio" class="t"/>
 </div>
 <div class="col-sm-2 col-md-2">
 <input type="text" name="costo" id="txt_costo"  placeholder="Costo" class="t"/>
 </div>
 <div class=" col-sm-3 col-md-3">
 <input type="text" name="descripcion" id="txt_Descripcion"  placeholder="Descripcion" class="t"/>
 </div>
 <div class=" col-sm-3 col-md-3">
 <input type="text" name="fecha" id="txt_fecha"  placeholder="Fecha" class="t"/>
 </div>
 <div class=" col-sm-1 col-md-1">
  <button id="btn_guardar">+</button>
 </div>
    </div>
</form>

</div>
 </div>

<div id="div_producto"></div>

    <!--
    <div id="div_mensaje">

       </div>
-->
</form>
    <div class="container">
      <div class="row">
        <p>Ingresos:</p>
        <div class="col-sm-2">
        <input type="text" class="form-control" >
        </div>
        <div class="col-sm-3">
        </div>
      </div>

      <br>

      <div class="row">
        <p align = left>Total:</p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <div class="col-sm-2">
        <input type="text" class="form-control" >
        </div>
        <div class="col-sm-3">
        </div>
      </div>

      <br>


      <div class="row">
        <p align = left>Ahorro:</p>&nbsp&nbsp&nbsp
        <div class="col-sm-2">
        <input type="text" class="form-control" >
        </div>
        <div class="col-sm-3">
        </div>
      </div>

      <br>


      <div class="row">
  <input align = left class="btn btn-primary btn-xs" type="button" value="Generar Factura">


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
