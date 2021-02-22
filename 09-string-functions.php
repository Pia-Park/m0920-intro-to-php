<?php
    # substr - returns a portion of a string
    $output = substr('Hello', 2,3);
    $output = substr('Hello', -2);
    echo $output . '<br>';

    #strlen() - return the length of a string
    $output = strlen('Hello World');
    echo $output . '<br>';

    #strpos - finds the position of the first occurence of a sub string
    $output = strpos('Hello World', 'o');
    echo $output . '<br>';

    #strrpos - finds the position of the last occurence of a sub string
    $output = strrpos('Hello World', 'o');
    echo $output . '<br>';

    #trim - strips whitespace
    $text = 'Hello World          ';
    var_dump($text);
    echo '<br>';

    $trimmed = trim($text);
    var_dump($trimmed);
    echo '<br>';

    #strtoupper - to upper case
    $output = strtoupper('Hello World');
    echo $output. '<br>';

    #strtolower - to lower case
    $output = strtolower('HELLO AGAIN');
    echo $output. '<br>';

    #ucwords - capitalize every word
    $output = ucwords('hello world');
    echo $output. '<br>';

    #str_replace
    $text = 'Hello World';
    $output = str_replace('World', 'Kitty', $text);
    echo $output. '<br>';

    #is_string - check if string
    $val = '22';
    $output = is_string($val);
    echo $output;

    $values = array(true, false, null, 'abc', 33, '33', 22.5, '32.6', '', ' ', 0, '0');

    foreach($values as $value){
        if(is_string($value)){
            echo "{$value} is a string<br>";
        }
    }

    #gzcompress() - compress a string

    $string = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam neque veritatis sunt nobis autem vitae perspiciatis asperiores, quae ea harum officiis sint eligendi placeat atque, in odit a pariatur. Reiciendis!
    Culpa, consequatur ipsa sed laudantium ut aliquid, minus earum nulla odio nihil a quos saepe velit quod neque veritatis voluptatum nesciunt molestias consequuntur perspiciatis! Excepturi perferendis odit sequi voluptate eaque!
    Facilis deserunt saepe quibusdam rem id nisi asperiores commodi, inventore, veniam, eveniet reprehenderit! Repellat explicabo, modi, commodi in id obcaecati distinctio saepe voluptatum fugiat esse asperiores molestias! Modi, voluptatum nisi.
    Quia quaerat dolor voluptas quisquam at voluptatum. Illum labore, optio officiis officia nobis nulla possimus minus odio voluptatibus obcaecati rem provident voluptates similique. Neque veniam nisi, numquam assumenda nihil facere.
    Modi dignissimos obcaecati minima unde totam possimus exercitationem eaque quis repudiandae architecto tempore dolorem voluptas, labore laboriosam, expedita reiciendis voluptatem! Veritatis doloremque amet quam a, magnam numquam exercitationem vitae adipisci!
    Minus, iste! Ab cupiditate est hic velit? Excepturi saepe maxime quae deleniti iste tenetur magni, nam totam est dignissimos, vitae quos ullam quaerat perferendis minus quidem dolorum eveniet adipisci debitis!
    Dolores modi quibusdam, explicabo velit cumque numquam perspiciatis rerum eveniet ab sapiente repellendus perferendis non delectus a ex voluptate voluptas maiores aliquam, fugiat iusto esse vero adipisci eum nam. Veniam!
    Placeat molestias quam ipsa doloribus quas maiores at dolor reiciendis illum officiis, voluptate natus, accusantium aut tenetur eum non beatae labore! Nesciunt molestiae repudiandae, assumenda ipsum recusandae quam nemo soluta.
    Tempora aliquid animi nulla, officiis nihil nostrum quaerat repellat, quia natus tempore assumenda facere doloribus fugiat blanditiis in? Sit illo illum quo facilis beatae dolores esse nesciunt. Rerum, earum cum.
    Sunt quaerat ipsam quidem reiciendis voluptatum blanditiis nisi impedit repellendus. Quisquam deserunt sed rem illo totam deleniti nam, ipsa aliquam quia, molestias, accusantium enim. Voluptate doloremque debitis quo alias perspiciatis.";

    $compress = gzcompress($string);
    // echo $compress;
    $original = gzuncompress($compress);
    echo $original;

