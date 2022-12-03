<?php
/* Elaborar un sistema de facturación que pida el nombre del vendedor, nombre del cliente, fecha de factura,
número de factura y suma de ventas realizadas. A la suma de ventas realizadas, se les hará un descuento según
la siguiente tabla:
 0< v< 100    -0%
100 <= v <= 500 -15%
500< v <=1000 -20%
v >1000       - 30%
*/

$descuento=0;
$nombrev='';
$nombrec='';
$fechaf='';
$numf='';
$venta= 0;
$totalpagar= 0;
if(isset($_POST['enviar'])){
    $nombrev=$_POST['nombrev'];
    $nombrec=$_POST['nombrec'];
    $fechaf=$_POST['fechaf'];
    $numf=$_POST['numf'];
    $venta=$_POST['venta'];

    if ($venta> 0 && $venta< 100) {
        $descuento =0;
    }elseif ($venta >= 100 && $venta <= 500) {
        $descuento =$venta*0.15;
    }elseif($venta > 500 && $venta <= 1000){
        $descuento = $venta * 0.2;
    } else{
        $descuento = $venta * 0.3;
    }
    
    $totalpagar = $venta - $descuentos;

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de facturacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
</head>
<body>
    <header class="container">
        <h1>sistemas de facturacion</h1>
    </header>
    <main class="container">
        <section>
        <form class="row g-3" method="POST" action="ejercicio7.php">
  <div class="col-md-6">
    <label for="nombrev" class="form-label">Nombre de vendedor</label>
    <input type="text" class="form-control" id="nombrev" name="nombrev"
    placeholder="escriba nombre de vendedor">
  </div>
  <div class="col-md-6">
    <label for="nombrec" class="form-label">Nombre del cliente</label>
    <input type="text" class="form-control" id="nombrec" name="nombrec"
    placeholder="escriba nombre de cliente">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">fecha de factura</label>
    <input type="date" class="form-control" id="fechaf" name="fechaf" value="<?php echo date( 'y-m-d');?>">
  </div>
  <div class="col-md-4">
    <label for="nombrec" class="form-label">Nº DE factura</label>
    <input type="text" class="form-control" id="numf" name="numf"
    placeholder="FACT-0001">
  </div>
  <div class="col-md-2">
    <label for="venta" class="form-label">ventas</label>
    <input type="text" class="form-control" id="venta" name="venta" placeholder="0.00">
  </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="enviar">calcular facturacion</button>
  </div>
</form>
 <div class="alert alert-primary"role="alert">
    <strong>
        nombre de vendedor:
    </strong>
    <?php echo $nombrev; ?>
    <br>
    <strong>
        nombre de cliente:
    </strong>
    <?php echo $nombrec; ?>
    <br>
    <strong>
        fecha de facturacion:
    </strong>
    <?php echo $fechaf; ?>
    <br>
    <strong>
           N° DE FACTURACION :
    </strong>
    <?php echo $numf; ?>
    <br>
    <strong>
        ventas: $
    </strong>
    <?php echo $venta; ?>
    <br>
    <strong>
        descuento : $
    </strong>
    <?php echo $descuento; ?>
    <br>
    <h3>
    <strong>
        TOTAL A PAGAR ES: $
    </strong>
    <?php echo $totalpagar; ?>
    <br>
    </h3>
   
 </div>


        </section>

    </main>
    

</body>
</html>