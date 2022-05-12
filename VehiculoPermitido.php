<?php
// Your code here!
$PesoPermitido=500;
$PesoVehiculo=readline();

if($PesoVehiculo<$PesoPermitido){
    echo "El peso esta permitido. El peso máximo del vehículo es: " .$pesovehiculo. " (Siendo " .$PesoPermitido. " el peso máximo permitido)";
}else{
    echo "El peso no esta permitido. El peso máximo del vehículo es: " .$pesovehiculo. " (Siendo " .$PesoPermitido. " el peso máximo permitido)";
}
?>
