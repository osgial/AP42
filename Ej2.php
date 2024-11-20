<!DOCTYPE html>
<html>
<head>
    <title>AP42OscarGiner</title>
</head>
<body>
    
    <h1>AP42OscarGiner</h1>

    <?php
    $array1=[0,1,2,2,3,4,5,5,6,7,8,9,9,10];
    $visto=[];
    $duplicados=[];

    foreach ($array1 as $valor) {
        if (isset($visto[$valor])) {
            $esduplicado = false;
            foreach ($duplicados as $duplicado) {
                if ($duplicado === $valor) {
                    $esduplicado = true;
                    break;
                }
            }
            if (!$esduplicado) {
                $duplicados[] = $valor;
            }
        } else {
            $visto[$valor] = true;
        }
    }

    var_dump($duplicados)
    ?>

</body>
</html>