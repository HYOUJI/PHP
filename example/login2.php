<?php

if ( isset($_POST['name']) && $_POST['name'] != "" && 
     isset($_POST['pass']) && $_POST['pass'] != "" ) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $usersfile = "users.txt";
    $new = true;

    $users = explode("\n",file_get_contents($usersfile));

    foreach ( $users as $user1 ) {
        list( $user1name, $user1pass ) = explode(":",$user1);
        if ( $name == trim($user1name) ) {
            $new = false;
            if ( $pass == trim($user1pass)){
                header("Location: content.php?user=".strtoupper($name)); 
            }
            else {
                header("Location: login2.php?pass=wrong");
            }
        }
    }       
    if ($new) {
        file_put_contents($usersfile, $name.":".$pass."\n" , FILE_APPEND);
        header("Location: content.php?user=".strtoupper($name));
    }
}

?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="name" /> Name <br />
    <input type="password" name="pass" /> Password 
    <?php 
    if ($_GET["pass"] == "wrong") {
        echo "<b> is wrong ! type again ! </b>";
        }
    ?>
    <br />
<input type="submit" name="submit" value="Login" />
</form>
