<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $opera = $_POST["opera"];
    echo $opera;
    switch ($opera){
    case "soma":
        echo ($num1+$num2);
        break;
    case "sub":
        echo ($num1-$num2);
        break;
    case "div":
        echo ($num1/$num2);
        break;
    case "mult":
        echo ($num1*$num2);
        break;
    }
