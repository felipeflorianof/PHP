<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css">
    <title>Document</title>
   
</head>
<body>
    <h1>PHP</h1>  
<div>


    <?php
        
        $v = $_GET["tab"];

        for($c = 1; $c <= 10; $c++){
            echo "$c x $v = ". ($c * $v). "</br>";
        }
    ?>


        <br><br><br>
    <a href="ex02.php"><input type="button" value="Voltar"></a>


</div>
</body>
</html>