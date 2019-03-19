<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css.css" rel="stylesheet">
        <title>Ola Mundo</title>
    </head>
    <body>
        <a href="index.php"> Questão 1</a>
        <a href="questao2.php"> Questão 2</a>
        <a href="questao3.php"> Questão 3</a>
        <a href="questao4.php"> Questão 4</a>
        <form method="POST" action="processa.php">
            Número 1: <input type="number" name="num1">
            Número 2: <input type="number" name="num2">
            Operação: <select name="opera">
                <option value="soma">+</option>
                <option value="sub">-</option>
                <option value="div">/</option>
                <option value="mult">*</option>
            </select>
            <button type="submit" value="Vai"> Enviar </button>
        </form>
    </body>
</html>
