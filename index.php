<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css.css" rel="stylesheet">
        <title>Ola Mundo</title>
    </head>
    <body>
        <?php
            $n1=10;
            $n2=4; 
            $n3=8;
            $n4=6;
            
           $media = ($n1+$n2+$n3+$n4)/4;
           
           if($media>=6){
               echo "Aprovado!";
           } else {
               echo "Reprovado!";
           }
        ?>
        <br>
        <?php 
            $valor=1200;
            
            if($valor <= 1000){
                $novo = $valor + ($valor*0.40);
            } elseif ($valor>=1000){
                $novo = $valor + ($valor*0.30);
            }
             echo "O valor do novo salario é:" .$novo;
        ?>
        <br>
        <?php
            $media=7.5;
            $freq=0.75;
            
            if(($media>=6)&&($freq>=0.75)){
               echo "Aprovado!";
           } else {
               echo "Reprovado!";
           }
        ?>
        <br>
        <?php
            
            for( $i = 0; $i <= 100; $i++ ) { 
                if ($i%2==0){
                    echo ' ' . $i;
                }
            }
        ?>
        <br>
        <?php 
            $n1=24;
            $n2=4;
            
            if($n1>$n2){
                echo "O maior número é " . $n1;
            }
            else{
                echo "O maior número é " . $n2;
            }
        ?>
        <br>
        <?php 
            $n1=24;
            $n2=4;
            $n3=56;
            
            if(($n1>$n2)&&($n1>$n3)){
                echo "O maior número é " . $n1;
            }
            elseif(($n2>$n1)&&($n2>$n3)){
                echo "O maior número é " . $n2;
            }
            else{
                echo "O maior número é " . $n3;
            }
        ?>
        <br>
        <?php 
            $n1=4;
            $n2=4;
            
            if($n1>$n2){
                echo "O maior número é " . $n1;
            }
            elseif($n2>$n1){
                echo "O maior número é " . $n2;
            }
            else{
                echo "São iguais";
            }
        ?>
    </body>
</html>