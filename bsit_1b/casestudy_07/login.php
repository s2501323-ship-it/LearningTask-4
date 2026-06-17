<!DOCTYPE html>
<html>
    <head>
        <title>..:Login:..</title>
    </head>
    <body>

            <link rel="stylesheet" href="style.css"/>

      


<?php
if (isset($_POST['submit'])) {
    

    $username = $_POST['userName'];
    $password = $_POST['userPassword'];
    

    $correct_username = "derek";
    $correct_password = "123";
    
   
    if ($username === $correct_username && $password === $correct_password) {
        echo "<h2 style='color: green;'>Login Successful</h2>";
    } else {
        echo "<h2 style='color: red;'>Login Fail</h2>";
    }
    
    echo "<hr>"; 
}
?>


        <form method="post" action="">
            <label>Username</label><br>
            <input type="text" name="userName"><br>
            <label>Password</label><br>
            <input type="password" name="userPassword"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>