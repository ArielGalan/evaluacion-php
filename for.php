<?php
/*for ($i=0; $i <100 ; $i++) 
{ 
    echo $i .',';
}  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for.php" method="post">
        <label for="">cuanto empleados?</label>
        <input type="number" name="cantidad">
        <button type="submit" name="procesar">procesar</button>
    </form>
    <?php
    if (isset($_POST['procesar'])) {
        $cantidadeempleados = $_POST['cantidad'];

        for ($i = 0; $i < $cantidadeempleados; $i++){
    ?> 
    <h2>ingrese la informacion del empleado <?php echo $i+1; ?></h2> 
    <form action="">
        <label for="">sueldo</label>
        <input type="text">
    </form>
    <hr>
    <?php }
    } ?>
</body>
</html>