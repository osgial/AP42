<!DOCTYPE html>
<html>
<head>
    <title>AP42OscarGiner</title>
</head>
<body>
    
    <h1>AP42OscarGiner</h1>

    <?php
    $array1=[8,5,9,3.6,5,1,2.2,8,4,8];
    $masalta=0;
    $masbaja=237148635;
    $paco=0;
    $i=0;

    foreach ($array1 as $valor) {
        if ($masalta >= $masalta) {
            $masalta = $valor;
            $valmayor = $i;
        }
        if ($valor < $masbaja) {
            $masbaja = $valor;
            $valmenor = $i;
        }
        $i++;
    }

    array_splice($array1, $valmayor, 1);
    array_splice($array1, $valmenor, 1);

    foreach ($array1 as $valor) {
        $paco = $paco + $valor;
    }
    $media = $paco / count($array1);
    
    var_dump($array1);
    echo "La nota media es " . $media;
    ?>

</body>
</html>