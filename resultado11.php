    <?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

$promedio = ($n1 + $n2 + $n3) / 3;

echo "Promedio: ".$promedio."<br>";

if($promedio >= 6)
{
    echo "Aprobado";
}
else
{
    echo "Reprobado";
}

?>