<?php
    #Functions - block of code that be repeatedly called

    /*
        Camel Case - myFunction()
        Lower Case - my_funtion()
        Pascal Case - MyFunction() -- Classes
    */

    //create a very simple function
    function simpleFunction(){
        echo 'Hello World';
    }

    // simpleFunction();

    #function with a param
    function sayHello($name = 'World'){
        echo "Hello $name<br>";
    }

    sayHello('Ami');
    sayHello();

    #return value
    function addNumber($num1, $num2){
        return $num1 + $num2;
    }

    echo addNumber(3,4);
    echo '<br>';

    #By reference
    $myNum = 10;

    function addFive($num){
        $num += 5;
    }
    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);

    echo "Value: $myNum<br>";

    addTen($myNum);

    echo "Value: $myNum<br>";

?>