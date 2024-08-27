<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="calculadora.php" method="post">
        <label for="">operação (+,-,*,/)</label>
        <input type="text" name="operacao">
        <br>
        <label for="">numero 1</label>
        <input type="text" name="n1">
        <br>
        <label for="">numero2</label>
        <input type="text" name="n2">
        <br>
        <input type="submit" value="enviar">




    </form>
    
</body>
</html>