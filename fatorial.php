<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>

    <link rel="stylesheet" href="styles6.css">

    <script>
        alert("Exercício 6")
    </script>

</head>
    <body bgcolor="#808080">
        <div id="primeiro">
            <h1>RA: 8127726 - Nome: Pedro Henrique Jacobucci</h1>
            <br>  
            <?php
                Function Fatorial($fat){
                    $result = 1;
                    echo "Fatorial de " . $fat . " = ";
                    While($fat > 1){ 
                        $result *= $fat;
                        $fat--;
                   }                
                   return $result;                    
            }            
                $x = Fatorial(6); 
                    echo $x;
            ?>
        </div>
    </body>
</html>