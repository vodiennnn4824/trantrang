<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linear equation</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        <input type="text" name="a" />x+
        <input type="text" name="b" />=0<br>
        <input type="submit" placeholder="Calculate"/>

    </form>

    <?php 
        
        if (isset($_GET["a"] , $_GET["b"])) {
            $a = $_GET["a"];
            $b = $_GET["b"];
            echo " The equation has a solution x = ".(-$b / $a);
        }
    ?>


