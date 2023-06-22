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
    
    
    $a=$_GET['x'];
    $b=$_GET['y'];
    $con=mysqli_connect('localhost','root','','student');
    $q="select * from usernamepwd";
    $rl=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($rl))
    {
        if($a==$row['Username'] && $b==$row['Password'])
        {
            $_SESSION['k1']=$a;
            $q1="insert into online values('$a')";
            $rl1=mysqli_query($con,$q1);
            echo"<script>
            window.location='one to onechat3.php';
            </script>";
            


        }
    }
    echo"invalid";

    
    ?>
    
</body>
</html>