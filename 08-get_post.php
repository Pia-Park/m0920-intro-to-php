<?php 
    // echo $_GET['name'];
    if(isset($_GET['name'])){
        // print_r($_GET);
        $name = $_GET['name'];
        // echo $name;
        $nameSecured = htmlentities($_GET['name']);
        // echo $nameSecured;
    }

    if(isset($_POST['name'])){
        // print_r($_POST);
        $name = htmlentities($_POST['name']);
        // echo $name;
    }

    if(isset($_REQUEST['name'])){
        // print_r($_POST);
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get_post</title>
</head>
<body>
    <form method="post" action="08-get_post.php">
        <div>
            <label for="">Name: </label>
            <input type="text" name="name" />
        </div>
        <div>
            <label for="">Email: </label>
            <input type="email" name="email" />
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>