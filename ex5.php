<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    
    <link rel="stylesheet" href="styles4.css">

    <script>
        alert("Exercício 5")
    </script>

</head>
    <body bgcolor="#808080">
        <div id="primeiro">
            <h1>RA: 8127726 - Nome: Pedro Henrique Jacobucci</h1>
            <br>
            <h1>Soma dos 10 primeiros números pares...</h1>
            <?php

                $i = 1;
                $soma = 0;

                while ($i <= 10) {

                    $soma = $soma + $i*2;
                    $i = $i + 1;
                }

                printf ('<br> Soma = %d ', $soma);
            ?>
        </div>    
    </body>
</html>