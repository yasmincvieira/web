<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6</title>
</head>
<body>
    <form method="GET">
        <label for="input">Insira um valor: </label>
        <input type="text" id="input" name="n">

        <input type="submit" value="Enviar">

        <?php
        if (isset($_GET['n']) && $_GET['n'] !== '') {
        $num = $_GET['n'];
        
        echo "<h3>Tabuada do $num</h3>";

        $n = $_GET["n"];

        for ($i=0 ; $i<=10; $i++){
            echo "$n * $i = ".$n*$i."<br>";
        }
        }
        ?>
    </form>

    
    
</body>
</html>