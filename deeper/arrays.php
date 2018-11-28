<?php
/*
    is_array() boolean value;
    in_array() check if exist a value;
    array_keys() show up all the indexes of indexes;
*/

    $computersBrand = array("Apple", "Microsoft", "Lenovo", "Dell", "Lg");
    if(is_array($computersBrand)){
        echo "true";
    }else{
        echo "false";
    }
    echo "  is_array checked!<br />";
    echo "<br />";
    
    if(in_array('Apple', $computersBrand)){
        echo "true";
    }else{
        echo "false";
    }
    echo " >> in_array << checked!<br />";
    echo "<br />";
    print_r($computersBrand);
    echo " >>>>>  print_r << working!<br />";
    $arrayComputer = array('one' => 'aaa','two'  => 'bbb', 'three' => 'ccc');
    echo "<br />";
    print_r(array_keys($arrayComputer));
    echo "   >>>>>  array_keys << working<br />";
    echo "<br />";
    var_export(array_keys($arrayComputer)); echo "   >> array_keys << can be used with 'var_export()'<br />";
    
    ////////////////////////////////////////////////////////////////////////////
    echo "<h1>Teste de arrays 2</h1>";

    $fruits = array(1 => "apple", 2 => "orange", 3 => "graples", 4 => "banana");
    var_export($fruits); echo " original";
    echo "<br />";

    asort($fruits);
    var_export($fruits); echo " asort its original indexes don't change";

    echo "<br />";
    echo "array ( 0 => 'apple', 1 => 'banana', 2 => 'graples', 3 => 'orange', ) sort";
    echo "<br />";

    echo count($fruits)." fruits in this array";
    echo "<br />";
    echo " merging arrays<br />";
    //merging arrays
    $tomato = array('tomate');
    var_export(array_merge($tomato, $fruits));
    echo "<br/>";
    echo "<br/> Now the >> explode, turns a string into an array <<";
    $dateExample = "10.12.1997";
    $dateArray = explode('.', $dateExample);
    var_export($dateArray);
    echo "<br/>";
    echo "<br/>The implode does the reverse ";
    var_export(implode('.', $dateArray));












































?>