<?php
$TR=array(5, 3, 1, 4, 2, 6, 7, 8, 10, 9, 11, 13, 15, 12, 14, 16, 15, 20, 18, 17, 19);
            
sort($TR);
$n=count($TR);
for($i=0; $i<$n; $i++)
{
    echo $TR[$i],", ";
}
echo "<br> mayor a menor ";
for($i=0; $i<$n; $i++)
{
    echo $TR[$i],", ";
}
echo "<br> menor a mayor ";
for($i=$n-1; $i!=(-1); $i--)
{
    echo $TR[$i],", ";
}
echo "<br> pares ";
for($i=0; $i<$n; $i++)
{
    if($TR[$i]%2==0)
    echo $TR[$i],", ";
}
echo "<br> impares ";
for($i=0; $i<$n; $i++)
{
    if($TR[$i]%2!=0)
    echo $TR[$i],", ";
}

  
?>