<!DOCTYPE html>
<html>
<head>
    <title>AP42OscarGiner</title>
</head>
<body>
    
    <h1>AP42OscarGiner</h1>

    <?php
    $array1=[0,1,2,3,4,5,6,7,8,9,10];
    $log=count($array1)-1;

    for ($i=0; $i < count($array1) ; $i++) { 
        $array2[$i]=$array1[$log];
        $log--;
    }

    var_dump($array1);
    var_dump($array2);
    ?>

</body>
</html>