# Laboratorio IV - TP Nro. 3


**Consigna** :book:

1. Partiendo de lo siguiente:
<pre><code>$myNumber = 123; 
$numberString = “123”;
</pre></code>
  - ¿Qué valor se espera si hacemos $myNumber + $numberString? 
  - ¿Y si hacemos la operación inversa?
  - ¿Y si hacemos $myNumber.$numberString?

2.	Si cambiamos la condición del siguiente if por los valores en la lista, ¿obtendremos siempre en pantalla un cartel que diga “Es correcto”? Pruebe en una consola y responda:
       <pre><code> $if(condition){
                   echo “It´s right”; 
        }</pre></code>

  -	1 == ”1”
  -	1 === ”1”
  -	! null 
  -	! false 
  -	“” 
  -	“ “ 
  -	“tested” 
  -	1-1

3.	Cree dos funciones, una que permita multiplicar y otra que permita dividir. Pruébelas en pantalla inventando valores. ¡No olvide evitar errores matemáticos!

4.	¿Cuál es el largo del siguiente arreglo? ¿Y su contenido?
 <pre><code>$array = [  
         1     => "first value",
         "1"  => "second value",    
         1.2  => "tirth value",    
         true => "fourth value",    
         1+0.2 => "fifth value",    
         false !== null => "sixth value", 
]; </pre></code>

5.	Partiendo del siguiente arreglo de personas ‘people’:

<pre><code>$people = [ 
          ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
          ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
          ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
          ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
          ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
          ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
          ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
]; </pre></code>
  -	Imprima por pantalla el total de mayores de edad.
  -	De mujeres menores de edad. 
  -	Cree una web que muestre una tabla con esos datos. 
  -	Redúzcalo hasta obtener un arreglo de edades únicamente.

6.	Confeccione un documento php donde se procese e imprima por pantalla el día de la semana en la que se encuentra. (Investigue function date() )
Por ejemplo: “El día de la semana es : xxxxx ”

  - Una vez impreso el día, modificar para que al ser sábado o Domingo imprima “Es fin de semana.”

7.	Se necesita un nuevo tratamiento de la información que se nos envía por un formulario con los datos de la cesta de los clientes.

  - Si la compra del cliente es inferior a 200 pesos podrán requerir 2 cosas:
    - si los productos son de mascotas se mostrará un mensaje: "No se puede realizar el envío".
    - si los productos son de ropa se le mostrará el siguiente mensaje: "Los gastos de envío son 80 pesos".

  - Si la compra tiene un importe entre 200 y 600 pesos se le indicará el mensaje: "Los gastos de envío son 80 pesos".

  - Si la compra supera los 600 pesos deberemos indicar un mensaje de que los portes de envío son gratis.

  - Si la compra supera los 2000 pesos deberemos mostrar un mensaje con un código de descuento: CODEDESC33.

Para este problema disponemos de los siguientes datos:
El importe total de la cesta de la compra viene en una variable $total_sale con un número decimal positivo. Ejemplo: $750.55.
En la variable $type_sale nos viene un texto que puede ser 'mascotas' o 'ropa'.

8.	Se nos pide realizar un script que indique cual es el mayor de 4 números, es decir, se definen cuatro números enteros y debemos mostrar un mensaje con el mayor de los cuatro. Las variables con los cuatro números serán $a, $b, $c y $d.
Dato: (valide el script intercambiando los valores de todas las variables).

9.	Cree una pequeña página web que contenga un formulario con tres input de texto para poder rellenar la información de una nueva persona (como las del ejercicio 5). Este formulario debe enviarse a otro script php, quien debe mostrar una tabla bien formada.

10.	Si no lo hizo en el ejercicio anterior, valide que los datos ingresados sean correctos. Si no lo son, debe volver a la página anterior.


# Laboratorio IV - TP Nro. 3.1

1.  Se tiene el siguiente string:
    <pre><code>$name = 'juan,maria,pepe,andrea,jorgelina,cecilia';</pre></code>
  - Crear un arreglo de nombres y mostrarlo por pantalla.
  - Ordenar alfabéticamente el arreglo de nombres de forma ascendente y mostrar por pantalla.
  - Convertir en mayúscula el primer caracter de cada nombre y pasarlo a un nuevo arreglo llamado $newArray. Mostrar por pantalla.
  - Obtener la cantidad de valores de $newArray. Crear un nuevo arreglo con enteros llamado $keys. Obtener la cantidad del mismo. Chekeando ambas cantidades colocadas en dos variables, utilizar la función array_combine() para generar un nuevo arreglo llamado $arrayAssociative. Las cantidades deben ser iguales.
  - Mostrar por pantalla $ arrayAssociative..
 
2.	Hacer una función que reciba como parámetros un valor y un array y mostrar por pantalla un mensaje que informe si ese valor existe o no en el array. Verificar resultado llamando a dicha función.
3.	Hacer una función que reciba una key y un array y luego de verificar si esa key existe en dicho arreglo, muestre el valor asociado a la misma.
4.	Armar una función que dado el $array arrayAssociative., retorne todas sus claves en un string separado por comas. Mostrar string por pantalla al llamar a la función.


# Laboratorio IV - TP Nro. 3.2

1.	Se pide procesar los datos enviados en el formulario del TP2 para ser visualizados de la siguiente forma en una tabla de orden vertical.
  - La tabla se deben generar seguido de procesamiento de la información.
  - Validar los datos enviados como se indica a continuación:
    - Datos Requeridos (Name, email, password y birth-day)
    - En el caso del sexo, mostrar correctamente el dato seleccionado, en caso contrario indicar [Unspecified ].
    - En caso de la Bio (About me), mostrar lo ingresado en el formulario, en caso contrario [Unspecified ].
  - Los intereses se deben procesar correctamente para exponer en la tabla solo los datos seleccionados en el formulario previamente.

Se proporciona un Ejemplo de cómo podría quedar finalizada la tabla de Datos.

![image](https://user-images.githubusercontent.com/75460259/132689998-12cf20b7-71b0-4759-8c52-fec26f816747.png)

