<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <?php
        $str = "<ul>
                <li>Coffee</li>
                <li>Tea</li>
                <li>Milk</li>
                </ul>";
        /* $regex = "/<label .*?>(.*?)<\/label>/"; */
        $regex = "/<li>(.*?)<\/li>/";
        preg_match_all($regex, $str , $out);
        
        print_r($out);
        
        
        
    ?>  
</body>
</html>