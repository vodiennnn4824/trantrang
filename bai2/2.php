<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    a<input type="text" name="a" /><br>
    b<input type="text" name="b" /><br>
    <input type="submit" value="Calculator"/>
</form>

<?php
    if (isset($_POST["a"], $_POST["b"])) {
        $a = floatval($_POST["a"]);
        $b = floatval($_POST["b"]);

        echo "Addition: " . ($a + $b) . "<br>";
        echo "Subtraction: " . ($a - $b) . "<br>";
        echo "Multiplication: " . ($a * $b) . "<br>";

        if ($b != 0) {
            echo "Division: " . ($a / $b) . "<br>";
        } else {
            echo "Cannot divide by zero.<br>";
        }
    }
    echo " This is my code " ;
    $my_name = 16 ; 
    $my_result = 18; 
    echo "This is my code " ;
    echo "" . "<br>"; 
?>

</body>
</html>