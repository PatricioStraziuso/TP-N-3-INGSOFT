<html>
<head>

</head>
<body>
<!--el programa que voy a realizar va a ser calcular facturas de un producto-->
<form class="" action="tp3.php" method="post">
<div class="datos">
    Nombre<input type="text" name="nombre" value="">
    Identificacion <input type="number" name="Id" value=""> 
    <br><br>
    
    Producto 1 : <input type="text" name="p1">
    Cantidad : <input type="text" name="c1">
    Valor unitario <input type="text" name="v1">
    <br><br>

    Producto 2 : <input type="text" name="p2">
    Cantidad : <input type="text" name="c2">
    Valor unitario <input type="text" name="v2">
    <input type="submit" value="generar">
</div>
</form>

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

<div>
    <hr color="green">

   <center>
    <h2>Detalle de compra</h2>
       <table border="0" width="1000" >

        <tr>
           <td>Productos</td>
           <td>Cantidad</td>
           <td>Precio unitario</td>
           <td>Precio Total</td>
        </tr>
            <tr>
                <td>
                    <?php
                      foreach ($productos as $pro) {
                        echo $pro .'<br>';
                      }
                      ?>
                </td>
                <td>
                    <?php
                    foreach ($cantidad as $can) {
                        echo $can .'br';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    foreach ($valor as $valoru) {
                        echo $valoru .'<br>';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    foreach ($valortotal as $valort){
                        echo $valort .'<br>'; }
                    ?>
            
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <?php echo 'Total Compra: $'. $suma .'<br>'.
                    'Total a pagar: $'.$valorpagar ;
                    ?>
                
                
                </td>
            </tr>
       </div>
    </table>
</body>
</html>
