<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ola Mundo</title>
    </head>
    <body>
        <form method="POST" action="soma.php">
            
            
            Nome:<input type="text" name="nome">
        <br>
            Sobrenome:<input type="text" name="sobrenome">
        <br>
            E-mail:<input type="text" name="email">
        <br>
            E-mail ou telefone:<input type="text" name="email">
        <br>
            Senha:<input type="password" name="sobrenome">
        <br>
            
            
            
            <select name="dia">
                <option value="">Dia</option>
                <?php
                    for ($i=1;$i<=31;$i++){
                        echo "<option>$i</option>";
                    }
                ?>
            </select>
            
            
            <select name="mes">
                <option value="">Mês</option>
                <?php
                    $vet=array();
                    $vet[]="jan";
                    $vet[]="fev";
                    $vet[]="mar";
                    $vet[]="abr";
                    $vet[]="mai";
                    $vet[]="jun";
                    $vet[]="jul";
                    $vet[]="ago";
                    $vet[]="set";
                    $vet[]="out";
                    $vet[]="nov";
                    $vet[]="dez";
                    for ($i=0;$i<12;$i++){
                        echo "<option>$vet[$i]</option>";
                    }
                ?>
            </select>
            
            
            <select name="ano">
                <option value="">Ano</option>
                <?php
                    for ($i=1905;$i<=2019;$i++){
                        echo "<option>$i</option>";
                    }
                ?>
            </select>
        
        
            <input type="radio" name="sexo" value="M"> Masculino
            <input type="radio" name="sexo" value="F"> Feminino
            <button type="submit" value="vai"> Enviar </button>
        </form>
    </body>
</html>
