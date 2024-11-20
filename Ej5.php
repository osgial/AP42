<!DOCTYPE html>
<html>
<head>
    <title>AP42OscarGiner</title>
</head>
<body>
    
    <h1>AP42OscarGiner</h1>

    <?php
    $array1=[0,1,2,2,2,3,4,5,5,6,7,7,7,7,7,7,7,7,8,9,9,10];
    $conteo=[];

    foreach ($array1 as $valor) {
        if (in_array($valor, array_keys($conteo))) {
            $conteo[$valor]++;
        } else {
            $conteo[$valor] = 1;
        }
    }

    var_dump($conteo);
    ?>

</body>
</html>