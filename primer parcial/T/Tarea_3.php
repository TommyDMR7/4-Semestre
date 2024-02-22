<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5630. Colegiatura</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>5630. Colegiatura</h1>
        <table border="1" cellspacing="3"cellpading="3" class="Ta">
        <th>Puntos</th> <td>11.64</td>   <th> Limite de memoria: </th> <th>32 MiB</td>
        <tr>
         <td> Limite de tiempo(caso)</td><td>1 (seg)</td> <td> Limite de tiempo total </td> <td> 1 (min) </td>
        </tr>
        <tr>
        <td>Tamaño limite de entrada (Bytes)</td><td> 10 KiB</td>
        </tr>
        </tr>

        </table>
        <div class="contenido">
        <h2>Descripcion<h/2>
        
        <h5>
        <p>La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero le preocupa cuanto vaya <br> a pagar, y te pide ayuda para que hagas un programa que le diga cuanto tenga que pagar. El esquema que maneja <br> la prepa es este: </p> 
            <p> "Plan de pagos" </p> 
            <p> *La colegiatura de los alumnos se determina según el numero de materias que cursan. El costo de cada <br> una de las materias es de $1600. <br>
*Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: si el pro-<br>medio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento <br> del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá <br> pagar la colegiatura completa, mas el IVA del 16%. </p>
</h5>

<h2>Entrada</h2>
    <h5>El numero de materias 
 que Esteban va a cursar. A Y B un numero con decimales 
 que es el promedio de Esteban.</h5>

 <h2>Salida</h2>
    <h5>Un numero entero C
 con el precio a pagar. Debe de ir con un $.</h5>

 <h2>Limites</h2>
    <h5>1 < A < 20
        <br>0 < B < 11</h5>
        </div>
    <table border="1"cellspacing="3"cellpading="3" class="Resio">
        <th>Entrada</th> <th>Salida</th>
        <tr> 
        <td> 5 <br> 9.6</td> <td>$5600</td>  
        </tr> 
        <tr>
        <td> 8 <br> 7.8</td> <td>$14848</td>  
        </tr>
        <tr>
        <td> 2 <br> 8</td> <td>$3712</td>  
    </tr>
    </table>
    <?php
    $materias=8;
    $promedio=7.8;
    $costo=$materias*1600;
    $descuento=$costo*0.3;
    $iva=$costo*0.16;
    $CostoD=$costo-$descuento;
    $CostoSD=$costo+$iva;
    if ($promedio>=9)   {
       echo"El total de materias es:", $materias, "<br>" ;
       echo "El promedio del alumno es de:", $promedio, "<br>";
       echo "El costo es:", $costo,"<br>";
       echo "Por lo que el costo final es de:", $CostoD;
    }
    else {
        echo"El total de materias es:", $materias, "<br>" ;
       echo "El promedio del alumno es de:", $promedio, "<br>";
       echo "El costo es:", $costo,"<br>";
       echo "El alumno no consiguió el descuento", "<br>";
       echo "Por lo que el costo final es de:", $CostoSD;
    }
    ?> 

    </body>
  
</html>