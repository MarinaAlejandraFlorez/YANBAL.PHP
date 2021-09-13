<? php
// el código php va a ella
?>
<html>
  <cabeza>
    <título>
      Tecnoserver
    </title>
  </head>
  <cuerpo>
  <? php incluyen 'Cabeza.php'; ?>
  <? php
  echo "Marina Florez";
?>
  <? php
  echo "<br> Todo se puede lograr aunque sea duro el camino!";
  ?>
  <? php
  echo "<br> A";
  echo "<br> B";
  echo "<br> C";
   ?>
   
   <? php
   echo "<br>", "<strong> Tecnoserver y Yanbal de la mano. </strong>";
?>
<? php
  echo "<p> ¡Unete a nuestra familia Yanbal! </p>";
  // Este es un comentario de una sola línea
  echo "<p> Encontraras el mejor centro de datos! </p>";
  echo "<p> Compra los productos de Yanbal! </p>";
?>
<? php
  echo "<p> Abre nuevas oportunidades! </p>";
  / *
  Este es un bloque de comentarios de varias líneas
  que se extiende sobre
  varias líneas
  * /
  echo "<p> ¡diez una infraestructura excelente! </p>";
  echo "<p> ¡La responsabilidad y compromiso de la mano! </p>";
?>
  </body>
</html>


<? php

$ nombre = 'Yanbal';
$ edad = 102;
echo $ nombre, "<br>", $ edad; 

// superó a 'Yanbal'
?>
<? php
define ("Tecnoserver", "Buen día soy la ingemniera representante de la empresa Tecnoserver!", falso);
echo "<br>", Tecnoserver;

// Outpusts "Buenas tardes soy la ingeniera representante de la empresa Tecnoserver!"
?>

<? php
$ string1 = "¡Yanbal!"; //doble comillas
$ string2 = 'Productos de belleza de calidad!'; //comillas simples

echo "<br>", $ cadena1, "<br>", $ cadena2


?>

<? php
$ int1 = 30; // numero positivo
$ int2 = -42; // numero negativo
$ suma = $ int1 + $ int2;
echo "<br>", "<br>", "mostrando el resultado de la suma 30 -42:", ($ suma);
?>


<? php
// como definir numeros float o decimales
$ x = 42,168;
// imprimir nmeo
echo "<br>", "<br>", "mostrando número decimal:", $ x;

?>

<? php
$ x = verdadero; $ y = falso;
?>

<? php
$ str = "10";
$ int = 20;
// estableciendo la suma
$ suma = $ str + $ int;
echo "<br>", "<br>", "mostrando el resultado de la suma 10 y 20:", ($ suma);

// Salidas 30
?>

<? php
$ nombre = 'Alejandra';
function getName () {
   global $ nombre;
   echo "<br>", "<br>", "mostrando variable global:", $ nombre;
}
getName ();

// Salidas 'Alejandra'
?>


<?php
$a = 'Estrategias de implementacion';
$hello = "Estrategias de implementacion!";
echo "<br>","<br>","mostrando variable a", $a;

// Outputs 'Estrategias de implementacion!'
?>

// Muestra 'Estrategias de implementación!'
?>

<? php
  $ num1 = 8;
  $ num2 = 2; 

  //Adición
  echo "<br>", "<br>", "mostrando resultado suma de 8 + 2", "=", $ num1 + $ num2; // 14

  //Sustracción
  echo "<br>", "<br>", "mostrando resultado resta de 8 - 2", "=", $ num1 - $ num2; // 2

  // Multiplicacion
  echo "<br>", "<br>", "mostrando resultado multiplicacion de 8 * 2", "=", $ num1 * $ num2; // 48

  //División
  echo "<br>", "<br>", "mostrando resultado división de 8/2", "=", $ num1 / $ num2; //1.33333333333
?>


<? php
  $ x = 14;
  $ Y = 3;
  echo "<br>", "<br>", "mostrando residuo de la division entre 14 y 3", "=", $ x% $ Y; // 2
?>

<? php
$ x = 50;
$ x + = 100;
echo "<br>", "<br>", "mostrando el resultado de 100 mas 50", "=", $ x;
?>


<? php

$ nombres [0] = "Marina";
$ nombres [1] = "Brenda";
$ nombres [2] = "Tecnoserver";

echo "<br>", "<br>", "mostrando el nombre encontrado en la posición 1 del arreglo names", "=", $ names [1]; // Produce "Stefany"
echo "<br>", "<br>", "mostrando el nombre encontrado en la posición 0 del arreglo names", "=", $ names [0]; // Produce "Stefany"
echo "<br>", "<br>", "mostrando el nombre encontrado en la posición 2 del arreglo names", "=", $ names [2]; // Produce "Stefany"

?>

<? php
$ myArray [0] = "Yanbal";
$ myArray [1] = "<strong> PHP </strong>";
$ myArray [2] = 102;
 
echo "<br>", "<br>", "$ myArray [0] tiene $ myArray [2] años y utiliza $ myArray [1]"; 
 
 // Salidas "Brenda tiene 16 años y es ingeniera en ciberseguridad de la empresa Tecnoserver"
?>
<? php

$ personas = array ("Alejandra" => "17", "Stefany" => "17",
"Brenda" => "16");

echo "<br>", "<br>", "mostrando la edad de uno de los ingenieros de la empresa Tecnoserver (Stefany)", "=", $ people ['Stefany']; // Salidas 18 "
?>

<? php
$ personas = matriz (
  'online' => array ('Alejandra', 'Stefany'),
  'offline' => array ('Brenda', 'Francisco'),
  'away' => array ('Marina', 'Florez')
);

echo "<br>", "<br>", "mostrando el nombre de la posición 0, de online", "=", $ people ['online'] [0]; // Emite "Alejandra"

echo "<br>", "<br>", "mostrando el nombre de la posición 1, de away", "=", $ people ['away'] [1]; // Florez
?>



<? php
$ x = 10;
$ y = 20;
si ($ x> = $ y) {
  echo $ x;
} demás {
  echo "<br>", "<br>", "mostrando la y porque no complió la condición", "=", $ y;
}

// Muestra "20"
?>
<? php
$ edad = 18; 

if ($ edad <= 13) {
  echo "<br>", "<br>", "mostrando que es niño por qque es menor de 13", "=", "niño.";
} elseif ($ edad> 13 && $ edad <18) {
  echo "<br>", "<br>", "mostrando que es adolescente por que es mayor de 13 pero menor 18", "=", "Adolescente";
} demás {
   echo "<br>", "<br>", "mostrando que es adulto porque es igual o mayor de 18", "=", "Adulto";
}

// Salidas "Adulto"
?>
<? php
$ i = 1;
while ($ i <7) {
  echo "<br>", "mostrando el iterador hasta el 7", "El valor es $ i <br />";
  $ i ++;
} 
?>


<? php
$ i = 5;
hacer {
  echo "<br>", "mostrando numeros + = 5 pero - = 7", "El numero es". $ i. "<br/>";
  $ i ++; 
} while ($ i <= 7); 

// Salida
// El numero es 5 
// El numero es 6
// El numero es 7
?>
<? php
para ($ a = 0; $ a <6; $ a ++) {
  echo "Valor de a:". $ a. "<br />";
}
?>

<? php
$ nombres = matriz ("Brenda", "Marina", "Stefany");
foreach ($ nombres como $ nombre) {
  echo "Ingenieros:", $ nombre. '<br />';
}

// Stefany 
// Alejandra
// Brenda
?>
<? php
$ hoy = 'Martes';

cambiar ($ hoy) {
  caso 'Mon':
    echo "Hoy es lunes.";
    rotura;
  caso "mar":
    echo "Hoy es Martes. Dia de Mejorar";
    rotura;
  caso "mié":
    echo "Hoy es miercoles.";
    rotura;
  caso "Jue":
    echo "Hoy es jueves.";
    rotura;
  caso "Vie":
    echo "Hoy es viernes.";
    rotura;
  caso "Sat":
    echo "Hoy es sabado.";
    rotura;
  caso "Suma":
    echo "Hoy es domingo";
    rotura;
  defecto:
    echo "Dia no valido";
    rotura;
}
// Muestra "Hoy es martes".
?>
<? php
$ x = 5;
cambiar ($ x) {
  caso 1:
    echo "Uno";
    rotura;
  caso 2:
    echo "Dos";
    rotura;
  defecto:
    echo "<br>", "Sin coincidencia";
}
// Salidas "Sin coincidencia"
?>

<? php
$ día = 'vie';

cambiar ($ día) {
  caso 'Mon':
    echo "Primer dia de la semna";
    rotura;
  caso 'Tue':
  caso 'Mié':
  caso 'Jue':
    echo 'dia de trabajo';
    rotura;
  caso 'fri':
    echo "<br>", 'viernes! a un dia del descanso ';
    rotura;
  defecto:
    echo 'Fin de semana';
}

// Salida "Dia de trabajo"
?>

<? php
$ x = 1;
cambiar ($ x) {
  caso 1:
    echo "<br>", "uno";
  caso 2:
    echo "<br>", "Dos";
  caso 3: 
    echo "<br>", "Tres";
  defecto:
    echo "<br>", "No hay coincidencia", "<br>";
}

// Salidas "UnoDosTres No hay coincidencia"
?>

<? php
echo "Numeros impares";
para ($ i = 0; $ i <10; $ i ++) {
  si ($ i% 2 == 0) {
    Seguir;
  }
  echo $ i. '';
}

// Salida: 1 3 5 7 9 
?>
<? php
function sayHello () {
  echo "<br>", "mostrando el resultado de la función =", "¡Yanbal!";
}

di hola(); // llamar a la funcion

// Produce "Yanbal"
?>

<? php
function multiplayByTwo ($ number) {
  $ respuesta = $ número * 2;
  echo "<br>", "mostrando el resultado de la multiplicacion =", $ respuesta;
}
multiplayByTwo (3);
// Salidas 6

función multiplicar ($ num1, $ num2) {
  echo "<br>", "mostrando el resultado de la multiplicacion =", $ num1 * $ num2;
}
multiplicar (3, 6); 


// Salidas 18


function setCounter ($ num = 10) {
  echo "<br>", "El contador es". $ num;
}
setCounter (42); // El contador es 42
setCounter (); // El contador es 10

función mult ($ num1, $ num2) {
  $ res = $ num1 * $ num2;
  return $ res;
}

echo "<br>", "mostrando multiplicacion con retorno =", mult (8, 3);
// Salidas 24 


?>
<? php
echo "<br>", "mostrando rutas =", $ _SERVER ['SCRIPT_NAME'];
// Resultados "/somefile.php"
?>




<? php
echo "<br>", "mostrando servidor =", $ _SERVER ['HTTP_HOST'], "<br>";
// Produce "localhost"
?>

<? php
requiere 'config.php';
echo '<img src = "'. $ ruta_imagen.'Yanbal.jpeg"> ';
?>
<h1> Formulario Post </h1>
<form action = "first.php" method = "post">
  <p> Nombre: <input type = "text" name = "name" /> </p>
  <p> Edad: <input type = "text" name = "age" /> </p>
  <p> <input type = "submit" name = "submit" value = "Submit" /> </p>
</form>
<h1> Formulario OBTENER </h1>
<formulario action = "actionGet.php" method = "get">
  Nombre: <input type = "text" name = "name" /> <br /> <br />
  Edad: <input type = "text" name = "age" /> <br /> <br />
  <input type = "submit" name = "submit" value = "Submit" />
</form>

<? php
// Iniciar la sesión

// Iniciar la sesión
session_start ();
$ _SESSION ['color'] = "Azul";
$ _SESSION ['nombre'] = "Marina";
?>
<! DOCTYPE html>
<html>
<cuerpo>
<? php
echo "Tu nombre es". $ _SESSION ['nombre'], "y su color de ojos es", $ _ SESSION ['Azul'];
// Muestra "Tu nombre es John"
?>
</body>
</html>
<? php
$ valor = "Brenda Salgado";
setcookie ("usuario", $ valor, tiempo () + (86400 * 30), '/'); 

if (isset ($ _ COOKIE ['usuario'])) {
  echo "<br> El valor es:". $ _COOKIE ['usuario'];
}
// Resultados "El valor es: John"
?>


<? php
$ myfile = fopen ("integrantes.txt", "w");

$ txt = "Brenda \ n";
fwrite ($ miarchivo, $ txt);
$ txt = "Marina \ n";
fwrite ($ miarchivo, $ txt);
$ txt = "Stefany \ n";
fwrite ($ miarchivo, $ txt);

fclose ($ miarchivo);

/ * El archivo contiene:
Stefany
* /
?>


<? php
$ myFile = "otroArchivo.txt";
$ fh = fopen ($ myFile, 'a');
fwrite ($ fh, "Algún texto");
fclose ($ fh);
?>
<? php
if (isset ($ _ POST ['texto'])) {
  $ nombre = $ _POST ['texto'];
  $ mango = fopen ('nombres.txt', 'a');
  fwrite ($ identificador, $ nombre. "\ n");
  fclose ($ identificador); 
}
?>
<método de formulario = "publicar">
  Nombre: <input type = "text" name = "text" /> 
  <input type = "submit" name = "submit" />
</form>


<? php

$ read = file ('nombres.txt');
$ count = count ($ read);
$ i = 1;
foreach ($ leído como $ línea) {
  echo $ línea;
  if ($ i <$ count) {
    eco ', ';
  }
  $ i ++;
}
?>
<? php

class Dogi {
  $ piernas públicas = 4;
  display de función pública () {
    echo "<br>", $ esto-> piernas;
  }
}
$ d1 = nuevo Dogi ();
$ d1-> display (); // 4

$ d2 = nuevo Dogi ();
$ d2-> piernas = 2;
$ d2-> display (); // 2
?>

<? php

class Person {
  public $ nombre;
  public $ age;
  función pública __construct ($ nombre, $ edad) {
    echo "<br>", "mostrando nombre desde un constructor =", $ this-> name = $ name;
    echo "<br>", "mostrando edad desde un constructor =", $ this-> age = $ age;
  }
}
$ p = nueva Persona ("Stefany", 17);
?>
<? php

class Persona {
  función pública __destruct () {
    echo "<br>", "Objecto destruido";
  }
}
$ p = nueva Persona ();
?>

<? php
class Animal {
  public $ nombre;
  función pública hola () {
    echo "<br>", "Hola de Animal", "<br>";
  }
}
clase Perro extiende Animal {
}

$ d = perro nuevo ();
$ d-> hola ();
?>

<? php
interfaz AnimalInterface {
  función pública makeSound ();
}

clase Dogo implementa AnimalInterface {
  función pública makeSound () {
    echo "<br>", "¡Guau guau! <br />";
  }
}
class Cat implementa AnimalInterface {
  función pública makeSound () {
    echo "<br>", "Miauuu miauuu! <br />";
  }
}

$ myObj1 = nuevo Dogo ();
$ myObj1-> makeSound ();

$ myObj2 = new Cat ();
$ myObj2-> makeSound ();
?>

<? php
clase abstracta Fruit {
  color $ privado;

  función pública abstracta eat ();

  función pública setColor ($ color) {
   echo $ this-> color = $ color;
  }
}

clase Apple extiende Fruta {
  función pública eat () {
    echo "<br>", "Delicioso";
  }
}

$ obj = nueva Apple ();
$ obj-> comer ();
?>

<? php
class myClass {
  estática $ myProperty = 42;
  función estática myMethod () {
    echo "<br>", self :: $ myProperty;
  }
}

myClass :: myMethod ();
?>