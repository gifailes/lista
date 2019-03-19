<?php
    $vet=array();
    $vet[]=$_GET["v1"];
    $vet[]=$_GET["v2"];
    $vet[]=$_GET["v3"];
    $vet[]=$_GET["v4"];
    $vet[]=$_GET["v5"];
    
    $maior = $vet[0];
    
    for ($i=0;$i<count($vet);$i++){
        //Maior valor
        if ($vet[$i]>=$maior){
            $maior=$vet[$i];
        }
        
        if ($vet[$i]%2==0){
            echo $vet[$i]." :é um número par<br>";
        }
                
        if (($vet[$i]%3==0)&&($vet[$i]%5==0)){
            echo $vet[$i]." :é um número multiplo de 3 e de 5<br>";
        }
    }
    echo ' O maior valor do vetor é: '. $maior;
