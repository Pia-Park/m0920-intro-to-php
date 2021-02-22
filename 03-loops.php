<?php
    #LOOPS 

    /*
        For
        While
        Do..While
        Foreach
    */

    #For loop
    # @params ---> (init, condition, inc/decr)

    for($i = 0; $i < 10; $i++){
        // echo($i. '<br>');
    }

    #While loop
    # @param ---> (condition)

    $i = 0;

    while($i < 10){
        // echo $i . '<br>';
        $i++;
    }

    #Do..while 
    # @params ---> (condition)

    $j = 0;

    do{
        // echo $j . '<br>';
        $j++;
    }

    while($j < 10);

    #Foreach - for arrays

    $people = array('Brad', 'Jose', 'William');

    foreach($people as $person){
        echo $person. '<br>';
    }

    #looping through associative array
    $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'will@hotmail.com');

    foreach($people as $person => $email){
        echo $person. ' : ' . $email . '<br>';
    }

