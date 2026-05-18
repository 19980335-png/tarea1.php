<?php

$precio = $_POST['precio'];

$iva = $precio * 0.13;

$total = $precio + $iva;

echo "Total con IVA: ".$total;

?>