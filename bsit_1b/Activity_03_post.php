<html>
<head>
    <title>Activity 03 Post</title>
    <style type="text/css">
        body {

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
            background-color: orange;
            color: white;
        }
        .btn:hover {
            background-color: white;
            color: orange;
        }
    </style>
</head>
<body>
    <form method="post" action="activity_03_reciever.php">
        <label>First name</label><br>
        <input type="text" class="form-control" name="txtFirstName" placeholder="First Name..."><br>
        
        <label>Last name</label><br>
        <input type="text" class="form-control" name="txtLastName" placeholder="Last Name..."><br>
        
        <label>Status</label><br>
        <select name="status">
            <option value="Single">Single</option>
            <option value="Married">Married</option>
        </select><br>
        
        <label>DOB</label><br>
        <input type="date" class="form-control" name="txtDOB"><br>
        
        <label>Address</label><br>
        <textarea rows="10" cols="25" class="form-control" name="txtAreaAddress" placeholder="Address..."></textarea><br>
        
        <input class="btn" type="submit" name="btnSubmit" value="Submit" />
        <input class="btn" type="reset" value="Clear" />
    </form>
</body>
</html>