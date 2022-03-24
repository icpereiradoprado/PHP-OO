<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operações</title>
    <style>
        body{
            background-color: #EAEBED;
        }
        fieldset{
            margin-top: 40px;
            margin-bottom: 10px;
            background-color: white;
        }
        .container{
            display: flex;
            flex-direction: column;
            align-items: center; 
        }
        .opcoes{
            margin-left: 80px;
            width: 100px;
            padding: 8px;  
            border: none;
            background-color: #006989;
            color: white;
            font-family: arial;
        }
        .opcoes:hover{
            background-color: #01546d;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="teste.php" method="post">
            <fieldset>
                <legend>Valores:</legend>
                <label for="valor1">1º Valor: </label>
                <input type="number" name="valor1" id="valor1" value=""><br><br>
                <label for="valor1">2º Valor: </label>
                <input type="number" name="valor2" id="valor2" value=""><br><br>
            </fieldset>
            
            <input type="submit" name="somar" class="opcoes" value="Somar"><br><br>
            <input type="submit" name="subtrair" class="opcoes" value="Subtrair"><br><br>
            <input type="submit" name="multiplicar" class="opcoes" value="Multiplicar"><br><br>
            <input type="submit" name="dividir" class="opcoes" value="Dividir"><br><br>
            <input type="submit" name="exponenciar" class="opcoes" value="Exponenciar"><br><br>
        </form>
    </div>
</body>
</html>