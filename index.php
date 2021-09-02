<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo practico N 3</title>
</head>
<body>
    <?php

    /// EJERCICIO 1 
    $myNumber = 123; 
    $numberString = "123";
    $result1A = $myNumber + $numberString;
    $result1B = $numberString + $myNumber;
    $result1C = $myNumber . $numberString;

    echo "Ejercio 1: a. " . $result1A . "<br>";
    /// a. suma ambas variables.
    echo "Ejercio 1: b. " . $result1B . "<br>";
    /// b. Si es al reves, los suma
    echo "Ejercio 1: c. " . $result1C . "<br>";
    /// c. imprime ambas variables

    /// EJERCICIO 2

    if (1 == "1") {
        echo "It´s right" . "<br>"; 
    }
    /* a. Imprime
    b. no imprime, ya que no son identicos
    c. imprime
    d. imprime
    e. no imprime
    f. imprime
    g. imprime
    h. no imprime */

    /// EJERCICIO 3

    function Multiply ($a, $b){
        $c = $a * $b;
        return $c;
    }

    function Divide ($a, $b){
        $c = $a / $b;
        return $c;
    }

    echo "El reusltado de la multiplicacion es de: " . Multiply(5, 3) . "<br>";
    echo "El resultado de la division es de: " . Divide(6, 2) . "<br>";
    
    // Ejercicio 4
    
    $array = [  
        1 => "first value",
        "1" => "second value",    
        1.2 => "tirth value",    
        true => "fourth value",    
        1+0.2 => "fifth value",    
        false !== null => "sixth value", 
    ];

    echo "El largo del arreglo es de: " . count($array) . "<br>";
    echo var_dump($array) . "<br>";

    // Ejercicio 5

    $people = [ 
        ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
        ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
        ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
        ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
        ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
        ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
        ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
    ];

    $count = 0;
    foreach($people as $key => $value){
        if ($value['age'] > 18){
            $count ++;
        }
    }

    echo "El total de mayores de edad es de: " . $count . "<br>";

    $count2 = 0;
    foreach($people as $key => $value){
        if ($value['age'] < 18 && $value['sex'] == 'f'){
            $count2 ++;
        }
    }

    echo "El total de mujeres menores de edad es de: " . $count2 . "<br>";

    echo '<table border="1">';
    foreach ($people as $r ) {
        echo '<tr>'; // tendra tres columnas, por las tres key
        foreach ( $r as $v ) {
            echo '<td>'.$v.'</td>'; // imprime los valores en la celda
        }
        echo '</tr>';
    }
    echo '</table>';

    $age = array();

    foreach($people as $key => $value){
        array_push($age, $value['age']);
    }

    echo var_dump($age);

    // Ejercicio 6

    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $hoy = date("F D j, Y, g:i a"); 
    echo "Fecha del dia de hoy: " . $hoy . "<br>";

    if (date("D") == 'Sun' || date("D") == 'Sat'){
        echo "Es fin de semana" . "<br>";
    } else {
        echo "No Es fin de semana" . "<br>";
    }

    // Ejercicio 8

    function Higher ($a, $b, $c, $d){
        if ($a > $b && $a > $c && $a > $d){
            echo "El mayor valor es: " . $a . "<br>";
        } else if (($b > $a && $b > $c && $b > $d)) {
            echo "El mayor valor es: " . $b . "<br>";
        } else if (($c > $a && $c > $b && $c > $d)) {
            echo "El mayor valor es: " . $c . "<br>";
        } else if (($d > $a && $d > $b && $d > $c)) {
            echo "El mayor valor es: " . $d . "<br>";
        }
    }

    Higher(10, 6, 3 , 4);
    Higher(3, 7, 5, 3);
    Higher(1, 3, 9, 4);
    Higher(3, 6, 3, 10);


    ?>
    
</body>
</html>


