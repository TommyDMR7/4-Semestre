<html>
<head><h1>12655. C09</h1></head>
<body>
<h2>Descripcion</h2>
<p> Escribe un programa que solicite las calificaciones de Matematicas, Ingles y Cocina y nos de su promedio.</p>
<h3>Entrada</h3>
<p>Escribe tres numeros reales</p>
<h4>Salida</h4>
<p>Un numero real representado el promedio de los tres numeros</p>
<h5>Ejemplo</h5>
<table border="1" cellpadding="5" cellspacing="0">
   <tr>
      <th>Input</th>
      <th>Output</th>
   </tr>
   <tr>
      <td>10,  9.5,  9.0</td>
      <td> 9.5 </td>
   </tr>
</table>
</body>
<?php 
$a=10;
$b=9.5;
$c=9.0;
echo "Datos cierrados", $a, "  ", $b, "  ", $c, "<BR>";
$p=($a+$b+$c)/3;
echo "El promedio es:", $p;


