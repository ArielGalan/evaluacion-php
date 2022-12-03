<?php
/* Leer 100 números enteros y contar cuántos de ellos son positivos, negativos o nulos. */
$nulo =0;
$positivos=0;
$negativos =0;

for ($i=0; $i < 100 ; $i++) { 
       $num= rand(-10,10);

       echo $num .',';
       if ($num==0){
        $nulo++;
       }elseif ($num>0){
        $positivos++;
       }else{
        $negativos++;
       }
}
echo "cantidad de numeros posit6ivos :" .$positivos .'<br>';
echo "cantidad de numeros posit6ivos :" .$nulo .'<br>';
echo "cantidad de numeros posit6ivos :" .$negativos .'<br>';
?>