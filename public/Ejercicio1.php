<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 14/12/2018
 * Time: 19:46
 */
$cadenaAux="";
$resultadoAux=0;
$resultado=0;
$cadenaTest="99 de 99 de 9999";
echo $cadenaTest."\t esto es la cadena de prueba";
$stringToArray=explode(" de ",$cadenaTest);
for ($i=0;$i<sizeof($stringToArray);$i++){
    $cadenaAux.= $stringToArray[$i];
}
$numeroArray=str_split($cadenaAux);
//$numeroArray=$cadenaAux;
$auxBoolean=true;
//echo sizeof($cadenaAux)."   test";
//
//while(true) {
    for ($k = 0; $k < sizeof($numeroArray); $k++) {
        $resultadoAux += $numeroArray[$k];
//        echo $numeroArray[$k] ." numero que se suma ";
    }
//    if ($resultado < 10) {
//        break;
//    }
    $arrayAux = str_split($resultadoAux . "");
  $numeroArray=$arrayAux;
//for ($w = 0; $w < sizeof($numeroArray); $w++) {
//    $resultado += $numeroArray[$w];
////        echo $numeroArray[$k] ." numero que se suma ";
//}
//}
for ($k = 0; $k < sizeof($numeroArray); $k++) {
    $resultado += $numeroArray[$k];
//        echo $numeroArray[$k] ." numero que se suma ";
}

// for($w=0;$w<sizeof($numeroArray);$w++){
//     $resultadoAux+=$numeroArray[$w];
// }

// echo $resultadoAux. " <-Elvalor total es diez";
//for ($k=0;$k<sizeof($numeroArray);$k++){
//    $resultado+= $numeroArray[$k];
//        echo $numeroArray[$k] ." numero que se suma ";
//}
//    $numeroArray=explode("",$resultado);
//}
//echo sizeof($numeroArray);
    echo "    RESULTADO  ". $resultado;