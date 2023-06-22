<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=$_GET['x'];
    $b=$_GET['y'];
    $con=mysqli_connect('localhost','root','','student');
    $q="insert into usernamepwd values('$a','$b')";
    $rl=mysqli_query($con,$q);
    if($rl)
    {
        echo"<script>
        window.location='one two onechat.php';
        </script>";
    }
    else
    {
        echo"error";
    }
    ?>
    
</body>
</html>