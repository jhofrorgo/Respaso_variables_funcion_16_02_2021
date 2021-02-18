<?php
    // Si mantengo alt y selecciono con el mouse varias lineas puedo modificarlas a la vez
    //Nombre Variable , = , Tipo variable (String) , Valor De La Variable 
    $Nombre = (string) "Jhon Freddy Ortiz Gómez";
    $Edad = (int) 29;
    $Altura = (double) 1.70;
    $Profesor = (bool) false;
    $Direccion = (array) ["Colombia" , "Santander" , "Bucaramanga", "Reposo" , False];
    
    //Formas de imprimir por pantalla (Print_r se usa mas para las listas)
    echo $Nombre;
    echo "<br>";
    var_dump ($Direccion);
    echo "<br>";
    print_r ($Altura);
    echo "<br>";

    //Como hacer un parrafo
    $Parrafo = (string) <<<INICIO
    
    <h1>MI INFORMACION</h1>
    <h2>Jhon Freddy Ortiz Gómez</h2>
    <h3>29</h3>
    <h4>1.70</h4>
    <h5>false</h5>
    <h6>Colombia, Santander, Bucaramanga, reposo, False</h6>
INICIO;
    print_r ($Parrafo);
    echo "<br>";


?>