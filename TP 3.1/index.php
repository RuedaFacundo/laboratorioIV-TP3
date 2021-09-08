<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 3.1</title>
</head>
<body>
    <?php
        // EJERCICIO 1
        $name = 'juan,maria,pepe,andrea,jorgelina,cecilia';
        $arrayName = explode(',', $name);
        var_dump($arrayName);

        sort($arrayName);
        var_dump($arrayName);

        $newArray = array();
        for ($i = 0; $i<count($arrayName); $i++)
        {
            $newArray[$i] =  ucfirst($arrayName[$i]);
        }
        var_dump($newArray);
        
        $keys = array("0", "1", "2", "3", "4", "5");
        echo "Cantidad de keys: " . count($keys) . "<br>";
        $arrayAssociative = array();
        $arrayAssociative = array_combine($keys, $newArray);
        foreach($arrayAssociative as $key => $value)
        {
            echo "Key: " . $key . "Valor: " . $value . "<br>";
        }

        // EJERCICIO 2

        $SearchValue = "Andrea";
        function isExists ($value, $array)
        {
            if (in_array($value, $array))
            {
                echo "El valor existe" . "<br>";
            } else 
            {
                echo "El valor no existe" . "<br>";
            }
        }

        isExists($SearchValue, $newArray);

        // EJERCICIO 3

        $SearchKey = 3;
        function isExistsKey ($key, $arrays)
        {
            if (array_key_exists($key, $arrays))
            {
                echo "La key existe" . "<br>";
            } else 
            {
                echo "La key no existe" . "<br>";
            }
        }

        isExistsKey($SearchKey, $arrayAssociative);

        // EJERCICIO 4
        
        function keys ($StringKey, $arrayAssoc)
        {
            $StringKey = array_keys($arrayAssoc);
            return $StringKey;
        }
        $ArrayKeys = array();
        $ArrayKeys = keys($ArrayKeys, $arrayAssociative);
        
        echo "Las keys del array son: " . implode(",", $ArrayKeys) . "<br>";
    
    ?>
</body>
</html>