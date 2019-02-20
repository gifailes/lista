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
        
            $n1=4;
            $n2=8;
            if($n1>$n2){
                echo "O maior número é: " . $n1;
            } elseif ($n2>$n1){
                echo "O maior número é: " . $n2;
            }
        ?>
        <br>
        <?php
            $n1=4;
            $n2=89;
            $n3=45;
            if(($n1>$n2)&&($n1>$n3)){
                echo "O maior número é: " . $n1;
            } elseif(($n2>$n3)&&($n2>$n1)) {
                echo "O maior número é: " . $n2;
            } elseif(($n3>$n1)&&($n3>$n2)) {
                echo "O maior número é: " . $n3;
            }
        ?>
        <br>
        <?php
            $n1=8;
            $n2=8;
            if($n1>$n2){
                echo "O maior número é: " . $n1;
            } elseif ($n2>$n1){
                echo "O maior número é: " . $n2;
            } elseif($n1==$n2){
                echo "Os numeros são iguais";
            }
        ?>
        <br>
        <?php
            $idade=15;
            
            if($idade<=18){
                echo "Meia entrada";
            } elseif ($idade>=60){
                echo "Meia entrada";
            } else {
                echo "Inteira";
            }
        ?>
        <br>
        <?php
            $j=1;
            while($j<11){
                $X=0;
                for($i = $X; $i < 11; $i++) {
                echo "$j x $i=";
                echo $j*$i;
                echo "<br>";
                $X++ ;
                }echo "<br>";
            $j++;
            }
            ?>
    </body>
</html>
