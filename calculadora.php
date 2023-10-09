<?php
$Dato1 = $_POST['numero1'];
$Dato2 = $_POST['numero2'];
$resultado = $_POST['opciones'];

if ($resultado == 'suma') {
    $resultado = $Dato1 + $Dato2;
    echo 'la suma de los datos es: ' .$resultado;}

elseif($resultado=='resta'){
    $resultado= $Dato1-$Dato2;
    echo 'la resta de los datos es: ' .$resultado;
}
elseif($resultado=='multiplicacion'){
    $resultado= $Dato1*$Dato2;
    echo 'la multiplicacion de los datos es: ' .$resultado;
}
elseif($resultado=='division'){
    $resultado= $Dato1/$Dato2;
    echo 'la division de los datos es: ' .$resultado;
}
?>                                                          