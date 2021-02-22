<?php
$loggedIn = false;
$arr = [1, 2, 3, 4, 5];

/*
    if($loggedIn){
        echo 'You are logged in';
    }else{
        echo 'You are NOT logged in';
    }

    echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';
    echo '<br>';

    $isRegistered = ($loggedIn == true) ? true : false;
    echo $isRegistered;
    */

?>

<div>
    <?php if ($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<div>
    <?php if ($loggedIn) : ?>
        <h1>Welcome User</h1>
    <?php else : ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach ($arr as $num) : ?>
        <?php echo $num; ?>
    <?php endforeach; ?>
</div>

<?php echo '<br>' ?>

<div>
    <ul>
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <li>
                <?php echo $i; ?>
            </li>
        <?php endfor; ?>
    </ul>
</div>