<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    Session_Start();
    $a=$_POST['k2'];
    $b=$_SESSION['k1'];
    $c=$_POST['k3'];
    $con=mysqli_connect('localhost','root','','student');
    $q="insert into chat2 values(NULL,'$a','$b','$c')";
    $rl=mysqli_query($con,$q);
    echo"";
    
    ?>
    
</body>
</html>