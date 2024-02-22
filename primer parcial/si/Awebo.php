<?php
$datos=[5, 3, 1, 4, 2, 6, 7, 8, 10, 9, 11, 13, 15, 12, 14, 16, 15, 20, 18, 17, 19];
$w=count($datos);
echo"Original <br>";
for ($i = 0; $i < $w; $i++) {
    echo $datos[$i] . ",  ";
  }

echo"<br> Ordenado <br>";
for ($a=0; $a!=(-1); $a++){
    echo $datos[$a], ", ";
}

echo"<br> De mayor a menor <br>";
for ($b=0; $b<$w; $b++){
    echo $datos[$b], ", ";
}

echo"<br> Ordenado de menor a mayor <br>";
for ($c=0; $c!=(-1); $c--){
    echo $datos[$c], ", ";
}
  
?>