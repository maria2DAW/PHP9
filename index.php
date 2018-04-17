<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
            echo " ";
            echo $name;
            
        ?>
    </body>
</html>
