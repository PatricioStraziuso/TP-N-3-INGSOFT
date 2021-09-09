
<?php 
// traemos datos del post

$nombre= $_POST["nombre"];
$id= $_POST["ID"];

//datos de producto
$pro1= $_POST["p1"];
$cant1= $_POST["c1"];
$val1= $_POST["v1"];
$pro2= $_POST["p2"];
$cant2= $_POST["c2"];
$val2= $_POST["v2"];

$productos = array($pro1,$pro2);
$cantidad = array($cant1,$cant2);
$valor = array($val1,$val2);

$pretotal1 = $cant1*$val1;
$pretotal2 = $cant2*$val2;


$valortotal = array($pretotal1,$pretotal2);
$suma = array_sum($valortotal);
?>