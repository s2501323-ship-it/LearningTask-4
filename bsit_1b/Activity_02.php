<html>
    <head>
        <title>Activity 02</title>
</head>
    <body>

        <?php
        if (isset($_POST["btnSubmit"])) {
            echo "the name you entered is <strong>".$_POST["txtName"]. "</strong><br>";
            echo "<a href='activity_02.php'>back</a>";

        } else {
 ?>
 <form method="post" action="activity_02.php">
        <label>name</label><br>
        <input type="text" name="txtName" placeholder="name...">
        <input type="submit" name="btnSubmit" value="submit" />
     </form>

        <?php } ?>

    </body>

</html>