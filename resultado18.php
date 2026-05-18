<?php

$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$subtotal = $cantidad * $precio;

echo "Cliente: ".$cliente."<br>";
echo "Producto: ".$producto."<br>";
echo "Subtotal: ".$subtotal."<br>";
echo "Total: ".$subtotal;

?>