<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="../lib/jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../lib/popper/popper.min.js"></script>
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/bootstrap/css/estilo.css">
    <script type="text/javascript" src="../lib/bootstrap/js/bootstrap.js"></script>
    <title>Factura</title>
  </head>

<body>
<br>

        <form class="form-inline my-2 my-lg-0" id="inicio">
  		  </br>


      		<ul class="nav">
            <a &nbsp class="navbar-brand" href="#">Ahorro Fácil</a>
      		<li><a href="index.php"><span class="icon-home"></span>  INICIO </a></li>
      		<li><a href=""><span class="icon-price-tags"></span> GASTOS </a>
      			<ul>
      		        <li><a href="modulos/mensual.php">    Mensual    </a></li>
                  <li><a href="modulos/anual.php">      Anual      </a></li>
                  <li><a href="modulos/movimientos.php">Movimientos</a></li>

      			</ul>
      		</li>
      	<li><a href="modulos/factura.php"><span class="icon-coin-dollar"></span> ESTADISTICAS </a></li>
      	<li><a href="modulos/contacto.php"><span class="icon-mail4"></span> FACTURA </a></li>
      	<li><a href="modulos/carrito.php"><span class="icon-cart"></span>  GENERAR FACTURA </a></li>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <li><a href="modulos/carrito.php"><span class="icon-cart"></span>  PERFIL </a></li>
      	</ul>




  </form>
  <br>
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
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>Agua</td>
            <td>$100</td>
            <td>Pago del agua atrasado</td>

          </tr>

        </tbody>
      </table>
      <b><p align = left>Ingresos:
        <div class="col-sm-1">
          <input type="text" class="form-control" >
        </div>
      </p></b>

      <b><p align = left>Total:  <div class="col-sm-1">
          <input type="text" class="form-control" >
        </div>
      </p></b>

    <b><p align = left>Ahorro:  <div class="col-sm-1">
          <input type="text" class="form-control" >
        </div>
      </p></b>
      <div class="row">
      <input align = left class="btn btn-primary btn-xs" type="button" value="Guardar Factura">

  </body>
</html>
