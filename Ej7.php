<!DOCTYPE html>
<html>
<head>
    <title>AP42OscarGiner</title>
</head>
<body>
    
    <h1>AP42OscarGiner</h1>

    <?php
    $array1=[2,5,7,0,4,0,7,-5,8,0];
    $log=0;
    $cuenta=count($array1);

    for ($i=0; $i < $cuenta ; $i++) { 
        if ($array1[$i] == 0) {
            array_splice($array1, $i, 1);
            array_push($array1, 0);
        }
    }

    var_dump($array1);

    ?>

</body>
</html>