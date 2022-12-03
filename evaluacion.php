<?php
/*1. Realice una aplicación que calcule el salario neto a pagar los empleados
de una Empresa. Dicha empresa realiza los siguientes descuentos.

ISSS (9%)
AFP (7%)
Renta (10%) - Se aplica, si el salario base es mayor a $ 472.00.

La aplicación debe pedir nombre, apellido y el salario base del empleado, mostrar
el salario neto y los descuentos respectivos.
Use formularios
Puede usar Bootstrap
La aplicación deber mostrar los resultados*/
$rent=0;
$isss=0;
$nombrec='';
$fechaf='';
$salario=0;
$AFP= 0;
$totalpagar= 0;
if(isset($_POST['enviar'])){
    $rent=$_POST['rent'];
    $nombrec=$_POST['nombrec'];
    $salario=$_POST['salario'];
    $isss=$_POST['isss'];

    if ($salario > 472.00 ) {
        $rent =$salario * 0.1;
        $isss=$salario *0.09;
        $AFP= $salario* 0.07;
    }elseif ($salario < 472.00) {
       $isss=$salario *0.09;
       $AFP= $salario* 0.07;
    }
    $totalpagar = $salario-$AFP-$isss-$rent;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de pagos</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
</head>
<body>
    <header class="container">
        <h1>salarios de empleados </h1>
    </header>
    <main class="container">
        <section>
        <form class="row g-3" method="POST" action="evaluacion.php">
  <div class="col-md-6">
    <label for="nombrec" class="form-label">Nombre del empleado</label>
    <input type="text" class="form-control" id="nombrec" name="nombrec"
    placeholder="escriba nombre del empleado">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">fecha de factura</label>
    <input type="date" class="form-control" id="fechaf" name="fechaf" value="<?php echo date( 'y-m-d');?>">
  </div>
  <div class="col-md-2">
    <label for="salario" class="form-label">salario</label>
    <input type="text" class="form-control" id="salario" name="salario" placeholder="0.00">
  </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="enviar">calcular facturacion</button>
  </div>
</form>
 <div class="alert alert-primary"role="alert">
    <strong>
        nombre deL empleado:
    </strong>
    <?php echo $nombrec; ?>
    <br>
    <strong>
        fecha de facturacion:
    </strong>
    <?php echo $fechaf; ?>
    <br>
    <strong>
          ISSS :
    </strong>
    <?php echo $isss; ?>
    <br>
    <strong>
        Renta: $
    </strong>
    <?php echo $rent; ?>
    <br>
    <strong>
        AFP : $
    </strong>
    <?php echo $AFP; ?>
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
