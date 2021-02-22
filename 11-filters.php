<?php
//check for posted data
// if(filter_has_var(INPUT_POST, 'some-email')){
//     echo 'Data found';
// }else{
//     echo 'No Data';
// }

// if (filter_input(INPUT_POST, 'some-email', FILTER_VALIDATE_EMAIL)) {
//     echo 'Email is valid';
// } else {
//     echo 'Email is NOT valid';
// }

#FILTER_VALIDATE_BOOLEAN
#FILTER_VALIDATE_EMAIL		
#FILTER_VALIDATE_FLOAT		
#FILTER_VALIDATE_INT			
#FILTER_VALIDATE_IP			
#FILTER_VALIDATE_REGEXP		
#FILTER_VALIDATE_URL

#FILTER_SANITIZE_EMAIL	
#FILTER_SANITIZE_ENCODED	
#FILTER_SANITIZE_NUMBER_FLOAT	
#FILTER_SANITIZE_NUMBER_INT	
#FILTER_SANITIZE_SPECIAL_CHARS	 
#FILTER_SANITIZE_STRING		
#FILTER_SANITIZE_URL

$email = $_POST['some-email'];

//remove illegal chars
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email . '<br>';

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Email is valid';
} else {
    echo 'Email is NOT valid';
}


?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="some-email" />
    <input type="submit" value="Submit">
</form>