<?php

$compra = $_POST['compra'];

if($compra > 100)
{
    $descuento = $compra * 0.10;
    $total = $compra - $descuento;

    echo "Total con descuento: ".$total;
}
else
{
    echo "No aplica descuento";
}

?>