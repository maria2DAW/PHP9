<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Conceptos PHP</title>
        <link rel="stylesheet" href="css/estilos.css"/>
    </head>
    <body>
        <h1>Ámbitos de las variables</h1>
        
        <?php
        
        /*En PHP hay dos ámbitos muy diferenciados:
         * 1- Ámbito de una función: Empienza y acaba con las llaves de apertura y cierre de la misma.
         * 2- Ámbito fuera de las funciones
         */
        
        /*En este caso la variable "$nombre" que está fuera de la función no tiene nada que ver 
         con la variable "$nombre" que está dentro de ésta, es decir que PHP las interpreta como 
         dos variables distintas.*/
        
        /*Esto es así en PHP, a diferencia de otros lenguajes, debido a que PHP existen 
         * las instrucciones "include" y "require" (ambas permiten incluir en el 
         * código PHP documentos externos (que es como copiar y pegar código)). */
        
        /*Esto implica que si PHP no funcionara de esta manera, al poder incluir códigos
        de otra persona, nos arriesgamos a que variables que hemos declarado e inicializado 
         * nosotros, se sobreescriban  con valores que pudiera haber dentro del código 
         * de ese "include" o "require", ya que podría haber variables con el mismo nombre
         que variables que hayamos creado nosotros.*/
        
        /*Debido a esto, PHP tiene este comportamiento con respecto a los ámbitos en las variables.*/
        
            $nombre = "María";
            
            function dameNombre()
            {                 
                $nombre = "Aroa";                
                               
                /*Para cambiar el ámbito de la variable a global para que se pueda acceder a ella
                 desde dentro de una función a lo que hay fuera: */
                
               global $name;
               $name = "Aroa";
               
               /*La instrucción "global" debe estar siempre dentro de la función para hacer 
                * global la variabble que se encuentra fuera.*/
           }
            
            dameNombre();
            
            echo $nombre;
            echo "<br />";
            echo $name;
            
        ?>
        
        <h1>Variables estáticas</h1>
        
        <?php
        
        function incrementarVariable()
        {
            //Para crear variables estáticas:
            static $contador = 0;
            $contador++;
            
            echo $contador."<br />";
            
            //Con esto se consigue:
            //  1- La línea donde hemos declarado la variable estática se ejecuta 
            //  sólamente la primera vez que se llama a la función
            
            //  2- Cuando la función finaliza el valor de la variable se conserva
        }
        
        incrementarVariable();
        incrementarVariable();
        incrementarVariable();
        incrementarVariable();
        incrementarVariable();
        
        ?>
        
        <h1>Comparación de strings</h1>
        
        <?php
        
        echo "<p class=\"resaltar\" >Ejemplo de frase</p>";
        
        //Dos formas de comparar cadenas en PHP
        //-strcmp (string compare) --> Compara valores de tipo string teniendo en cuenta mayúsculas y minúsculas
        //-strcasecmp --> Compara valores de tipo string ignorando mayúsculas y minúsculas
        
        $variable1 = "casa";
        
        $variable2 = "CASA";
        
        $resultado = strcmp($variable2, $variable1);  //Devuelve -1 si no son iguales y 0 si son iguales.
        //En este caso debería devolver -1 porque no son dos cadenas iguales.
        
        echo "El resultado es ".$resultado;
        
        $resultado2 = strcasecmp($variable2, $variable1);
        
        echo "<br />El resultado es ".$resultado2;
        echo "<br />";
        echo "<br />";
        
        if($resultado)
        {
            echo "No coinciden";
        }
        
        else
        {
            echo "Coinciden";
        }
        
        echo "<br />";
        echo "<br />";
        
        if($resultado2)
        {
            echo "No coinciden";
        }
        
        else
        {
            echo "Coinciden";
        }
        
        ?>
        
        <h1>Constantes</h1>
        
       <?php
       
       //Para declarar constantes:       
       //define("NOMBRE_CONSTANTE", valor, [bool $case_insensitive = false]); 
       //El tercer parámetro es opcional y nos permite establecer el nombre de la constante en minúsculas.
       
       /*-El nombre de una constante debe ir en mayúscula (convenio)
         -No deben llevar el símbolo "$"
        *-El obligatorio el uso de la función "define()" para definir constantes 
        *-El ámbito de las constantes es global por defecto
        *-No se pueden redefinir
        *-Sólo pueden almacenar valores escalares (valores que no se pueden dividir 
        * en partes más pequeñas --> enteros, decimales, cadenas, booleanos. Un array no 
        * sería un valor escalar, ya que está compuesto de otros valores, por lo tanto, 
        * las constantes no pueden almacenar arrays. )  /
        */
       
       define("AUTOR", "María");
       
       echo "El autor es ".AUTOR;
       
       //CONSTANTES PREDEFINIDAS:
       
       echo "<br /><br />";
       
       echo "La línea de esta instrucción es: ".__LINE__."<br />";
       echo "Estamos trabajando con este fichero: ".__FILE__;
       
       ?>
    </body>
</html>
