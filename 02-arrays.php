<?php
    #Array 
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    //INDEXED
    $people = array('Danilo', 'Nico', 'Koji');
    $ids = array(23,55,12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Hyundai';
    $cars[] = 'BMW';

    echo $people[0] . "<br>";
    echo $ids[3];
    echo $cars[4];

    echo "<br>";
    echo count($cars);
    echo "<br>";
    print_r($cars);
    echo "<br>";
    var_dump($cars);
    echo "<br>";
    
    #Associative arrays
    $people = array('Ami' => 35, 'Ayumi' => 65, 'Inae' => 13, 'Miyu' => 46);
    
    echo $people['Ami'] . "<br>";
    print_r($people);
    echo "<br>";
    var_dump($people);


    #Multi-Dimensional - nested array
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 10, 5)
    );

    // $cars2 = [
    //     ['Honda', 20, 10],
    //     ['Toyota', 30, 20],
    //     ['Ford', 10, 5]
    // ];

    echo "<br>";
    echo $cars[1][0];

