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
