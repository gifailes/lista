<?php
$numbers = array();
    $numbers[] = $_POST["n1"];
    $numbers[] = $_POST["n2"];
    $numbers[] = $_POST["n3"];
    $numbers[] = $_POST["n4"];
    $numbers[] = $_POST["n5"];
    
    $auxiliar = $numbers[0];
    for ($i=0 ; $i < count($numbers) ; $i++){
        if($numbers[$i]%2==0){
            echo "$numbers[$i] é par <br>";
        }
        if( $auxiliar <= $numbers[$i] ){
            $auxiliar = $numbers[$i];
        }
    }
    echo "O MAIOR número é: $auxiliar";
