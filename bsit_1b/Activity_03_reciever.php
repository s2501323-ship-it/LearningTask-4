<html>
<head>
    <title>Activity 03 reciever</title>
    <style type="text/css">

            body{

         background-image: url('Modern-abstract-3d-white-background-Graphics-68125082-1.jpg'); 
            background-size: cover;                     
            background-position: center;                
            background-repeat: no-repeat;                
            background-attachment: fixed;  
                }
        .form-control {
            font-family: verdana;
        }
        .btn {
            background-color: Blue;
            color: white;
        }
        .btn:hover {
            background-color: white;
            color: blue;
        }
    </style>
</head>
<body>
    <form method="post" action="activity_03_reciever.php">
        <label>First name</label><br>
        <strong><?php echo $_POST["txtFirstName"] ?></strong><br>
        <label>Last name</label><br>
        <strong><?php echo $_POST["txtLastName"] ?></strong><br>
        <label>Status</label><br>
        <strong><?php echo $_POST["status"] ?></strong><br>
        <label>DOB</label><br>
        <strong><?php echo $_POST["txtDOB"] ?></strong><br>
        <label>Address</label><br>
        <strong><?php echo $_POST["txtAreaAddress"] ?></strong><br>
        <a href="activity_03_post.php">Back</a>
    </form>
</body>
</html>