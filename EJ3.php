<!DOCTYPE html>
<html>
<head>
    <title>AP42OscarGiner</title>
</head>
<body>
    
    <h1>AP42OscarGiner</h1>

    <?php
    $array1=[0,1,2,2,3,4,5,5,6,7,8,9,9,10];
    $pares=[];
    $impares=[];

    foreach ($array1 as $valor) {
        if ($valor % 2 == 0) {
            $pares[]=$valor;
        } else {
            $impares[]=$valor;
        }
    }

    var_dump($pares);
    var_dump($impares);
    ?>

</body>
</html>