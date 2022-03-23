<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>

    <link rel="stylesheet" href="styles2.css">

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

                for($i = 1; $i <= 500; $i++) {
                    echo $i;
                    echo "<br>";
                }
            ?>
        </div>
    </body>
</html>