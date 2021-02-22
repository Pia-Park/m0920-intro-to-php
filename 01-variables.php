hello
<h1>hello</h1>

<?php
    echo 'hello world';

    // single line comment
    # single line comment

    /*
        Multiline
        Comment
    */

    echo 'wuuut!';
    // print 'Welcome';

?>

<?php
    #VARIABLES
    /*
        - Prefix $
        - Start with a letter or an underscore eg. $_someVar
        - Only letters, numbers and underscore eg. $someVar9
        - case sensitive
    */

    #DATA TYPES
    /*
        - String
        - Integers
        - Floats eg. 40.58
        - Booleans
        - Arrays
        - Objects
        - NULL
        - Resource - a return or a reference to a function
    */

    $output = "\n Privet Mir";
    // echo $output;
    echo nl2br($output);
    
    $output2 = 'Youkoso Warudo';
    echo "<br>";
    echo $output2;
    echo "<br>";

    $num1 = 4;
    $float1 = 3.2;
    $bool1 = true;

    $num2 = 10;
    $sum = $num1 + $num2;
    echo $sum;

    echo "<br>";

    $string1 = 'Guten';
    $string2 = 'Morgen';

    // $greeting = $string1 + $string2; // this will throw a typeError
    $greeting = $string1 . $string2;
    $greeting2 = $string1 . " " . $string2;
    $greeting3 = "$string1 $string2";
    echo $greeting . "<br>";
    echo $greeting2 . "<br>";
    echo $greeting3 . "<br>";

    $greeting4 = 'They\'re Here';
    echo $greeting4 . "<br>";

    #CONSTANT or const in JS :)
    define('HOLA', 'como estas'); //const HOLA = 'como estas'
    echo HOLA;

    ?>