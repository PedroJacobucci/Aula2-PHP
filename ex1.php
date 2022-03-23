<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>

    <link rel="stylesheet" href="styles.css">

    <script>
        alert("Aula php dia 22/03")
    </script>

</head>
    <body bgcolor="#808080">
    
        <div id="primeiro">
    
            <h1>RA: 8127726 - Nome: Pedro Henrique Jacobucci</h1>
            <br>
            <h1>Lista dos 500 primeiros números...</h1>
            <br>
    
            <?php

                $i = 1;

                while ($i <= 500) {
                    printf ('<br> %d', $i);
                    $i++;
                }
            ?>
        </div>
    </body>
</html>