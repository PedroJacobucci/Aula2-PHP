<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>

    <link rel="stylesheet" href="styles3.css">

    <script>
        alert("Exercício 3")
    </script>
</head>
    <body bgcolor="#808080">

        <div id="primeiro"> 
            <h1>RA: 8127726 - Nome: Pedro Henrique Jacobucci</h1>
            <br>
            <h1> Lista dos 20 primeiros números pares...</h1>
            <?php

                $i = 1;

                while ($i <= 20) {
                    printf ('<br> * Número %d => %d', $i, $i*2);
                    $i++;
                }
            
            ?>
        </div>
    </body>
</html>