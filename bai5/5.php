<form action="<?php $_PHP_SELF ?>" method="POST">
        a<input type="text" name="a" /><br>
        b<input type="text" name="b" /><br>
        <input type="submit" placeholder="Calculator"/>

    </form>

    <?php
        
        if (isset($_POST["a"] , $_POST["b"])) {
            $a = $_POST["a"];
            $b = $_POST["b"];
            echo "Addition: ".($a + $b)."<br>";
            echo "Substraction: ".($a - $b)."<br>";
            echo "Multiplication: ".($a * $b)."<br>";
            echo "Division: ".($a / $b)."<br>";
        }
        
    ?>
