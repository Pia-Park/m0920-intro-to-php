<?php 

$people[] = "Steve";
$people[] = "John";
$people[] = "Marie";
$people[] = "Eve";
$people[] = "Evan";
$people[] = "Jose";
$people[] = "William";
$people[] = "Malcom";
$people[] = "Harry";
$people[] = "Henry";
$people[] = "Danilo";
$people[] = "Ami";
$people[] = "Nico";
$people[] = "Ayumi";
$people[] = "Koji";


//Get query string
$q = $_REQUEST['q'];

$suggestion = "";

//Get suggestions
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            }else{
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;