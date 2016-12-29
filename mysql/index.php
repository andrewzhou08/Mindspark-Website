<?php

    $link = mysqli_connect("localhost","cl20-users-28r","andrew-23","cl20-users-28r");
    
    if(mysqli_connect_error()) {
        die ("There was an error connecting to the database.");
    }


    //$query = "INSERT INTO `users` (`email`, `password`) VALUES('andrewzhoou08@gmail.com','asdf')";

    //$query = "UPDATE `users` SET email = 'newemail@gmail.com' WHERE id = 1 LIMIT 1";

    //mysqli_real_escape_string($link, $name);

    if(array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        if($_POST['email'] == '') {
            echo "<p>Email is required.</p>";
        } else if($_POST['password'] == '') {
            echo "<p>Password is required.</p>";
        } else {
            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
            
            $result = mysqli_query($link, $query);
            
            if(mysqli_num_rows($result) > 0) {
                echo "<p>That email address has already been taken.</p>";
            } else {
                $query = "INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link,$_POST['email'])."', '".mysqli_real_escape_string($link,$_POST['password'])."')";
                
                if(mysqli_query($link, $query)) {
                    echo "<p>You have been signed up!";
                } else {
                    echo "<p>There was a problem signing up.";
                }
            }
        }
    }
    
?>

<html>
    <head><title>MySQL</title></head>
    
    <body>
        <form method="post">
            <input name="email" placeholder="Email Address"/>
            <input name="password" type="password" placeholder="Password"/>
            <input type="submit" value="Sign Up"/>
        </form>
    </body>
</html>