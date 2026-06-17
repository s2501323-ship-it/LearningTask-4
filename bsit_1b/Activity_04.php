<html>
<head>
    <title>Activity Math Operations</title>
</head>
<body>
<style type="text/css">
        body {

            background-image: url('Modern-abstract-3d-white-background-Graphics-68125082-1.jpg'); 
            background-size: cover;                     
            background-position: center;                
            background-repeat: no-repeat;                
            background-attachment: fixed;                
            
        }
        </style>
    <?php
    if (isset($_POST["btnSubmit"])) {
    
         $num1 = $_POST["num1"];
         $num2 = $_POST["num2"];

         $sum = $num1 + $num2;
         $difference = $num1 - $num2;
         $product  = $num1 * $num2;
         $quotient = $num1 / $num2;
         

        echo "<h3>Results:</h3>";
        echo "First Number = <strong>" . $num1 . "</strong><br>";       
        
        echo "Second Number = <strong>" . $num2 . "</strong><br><br>";
        echo "Addition (+) = <strong>" . $sum . "</strong><br>";
        echo "Subtraction (-) = <strong>" . $difference . "</strong><br>";
        echo "Multiplication (*) = <strong>" . $product . "</strong><br>";
        echo "Division (/) = <strong>" . $quotient . "</strong><br><br>";

        echo "<a href='Activity_04.php'>Back</a>";

    } else {
    ?>
        <form method="post" action="">
            <label>Enter First Number:</label><br>
            <input type="number" name="num1" step="any" required placeholder="0"><br><br>

            <label>Enter Second Number:</label><br>
            <input type="number" name="num2" step="any" required placeholder="0"><br><br>

            <input type="submit" name="btnSubmit" value="Click to Calculate" />
        </form>
    <?php 
    } 
    ?>

</body>
</html>