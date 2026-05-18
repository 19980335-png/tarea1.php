<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if($n1 > $n2)
{
    echo $n1." es mayor";
}
else
{
    echo $n2." es mayor";
}

?>