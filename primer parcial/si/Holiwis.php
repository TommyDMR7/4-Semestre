<?php
$datos=array(11, 13.3, 11, 43, 55, 67, 19, 100, 11, 13.3, 57, 99, 100, "Jelous");
$a=count($datos);
echo $datos[4], "<br>";
for($i=0; $i< $a; $i++)
{
    echo"$datos[$i],";
}
echo "<br> Uso de array count values <br>";
print_r (array_count_values($datos));
echo "<br> Uso del var_dump <br>";
echo var_dump($datos), "<br>";

echo "edades <br>";
$edades=array(11, 16, 18, 14, 13, 19);
$t=count($edades);
sort($edades);
for ($i=0; $i<$t; $i++)
{
    echo $edades[$i], ", ";
}
?>