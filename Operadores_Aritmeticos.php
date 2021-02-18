
<?php

/*
"suma +" $total = $precio + $iva; o tambien $precio += $iva;
"resta -" $total = $precio - $iva o tambien $precio -= $iva;
"multiplicación *" $total = $precio + $iva o tambien $precio *= $iva;;
"división /" $total = $precio + $iva o tambien $precio /= $iva; 
"modulo %" $total = $precio % $iva o tambien $precio %= $iva;
"negación !="  $ResNega = (int) $num9 != $num10;

Nota: los abreviados solo se pueden usar si la variable 1 no se usará mas adelante
Esto debido a que el sistema reemplaza el valor de la variable y no lo guarda
*/

    //Asi se realiza una suma 
    $num1 = (int) 2; //el tipo de dato debe ser compatible para operaciones
    $num2 = (int) 5; //el tipo de dato debe ser compatible para operaciones
    $ResSuma = (int) ($num1+($num2)); //se realiza la sumatoria de los dos números
    print_r($ResSuma);
    echo "<br>";


    //Suma Abreviada (Ahora $num1 tiene un valor de 7 en este caso)
    $num1 += $num2;
    print_r($num1);
    echo "<br>";


    //Asi se realiza una resta
    $num3 = (int) 9;
    $num4 = (int) 3;
    $ResResta = (int) $num3 - $num4;
    print_r($ResResta);
    echo "<br>";
    //Resta Abreviada (Ahora $num1 tiene un valor de 6 en este caso)
    $num3 -= $num4;
    print_r($num3);
    echo "<br>";


    //Asi se realiza una multiplicación
    $num5 = (int) 10;
    $num6 = (int) 3;
    $ResMulti = (int) $num5 * $num6;
    print_r($ResMulti);
    echo "<br>";
    //Multiplicación Abreviada (Ahora $num1 tiene un valor de 30 en este caso)
    $num5 *= $num6;
    print_r($num5);
    echo "<br>";


    //Asi se realiza una división
    $num7 = (int) 12;
    $num8 = (int) 3;
    $ResDivi = (int) $num7 / $num8;
    print_r($ResDivi);
    echo "<br>";
    //División Abreviada (Ahora $num1 tiene un valor de 4 en este caso)
    $num7 /= $num8;
    print_r($num7);
    echo "<br>";


    //Asi se realiza un modulo, es el resto de la división (7/2) la respuesta es 1 ya que 3*2 = 6 a 7 1
    $num9 = (int) 6;
    $num10 = (int) 5;
    $ResModulo = (int) $num9 % $num10;
    print_r($ResModulo);
    echo "<br>";
    //Modulo Abreviado (Ahora $num1 tiene un valor de 1 en este caso)
    $num9 %= $num10;
    print_r($num9);
    echo "<br>";


    //Asi se realiza una negacion (¿Diferente?)
    $num11 = (int) 10;
    $num12 = (int) 9;
    $ResNega = (int) $num9 != $num10; // 10 es diferente de 9? devuelve un 1 - true o 0 -false
    var_dump($ResNega);
    echo "<br>";


    //Pos_Incremento entre variables 
    $num13 =(int) 0;
    $num14 = (int) $num13++; //inicializa la variable en 0 y en la siguiente 14 vale 13 y 13+1
    $num14 = (int) $num13++;
    $num14 = (int) $num13++;
    print_r( $num14);

    //Pre_Incremento entre variables 
    $num15 =(int) 0;
    $num16 = (int) ++$num15;// primero suma el número dejando 1 y 1, 2 y 2, 3 y3 etc...
    $num16 = (int) ++$num15;
    $num16 = (int) ++$num15;
    print_r( $num16);

    //Pos_Decremento entre variables 
    $num17 = (int) 8;
    $num17--;  
    print_r( $num17); 

    //Pos_Decremento entre variables 
    $num18 = (int) 8;
    $num19 = $num18--;// primero asigna el número 8 a num 18 y despues resta 1 a num 17 siendo 7
    $num19 = $num18--;
    $num19 = $num18--;
    print_r( $num19); 


    //Pos_Decremento entre variables 
    $num20 = (int) 8;
    $num21 = --$num20;// primero asigna el número 8 a num 18 y despues resta 1 a num 17 siendo 7
    $num21 = --$num20;
    $num21 = --$num20;
    print_r( $num21); 

?>