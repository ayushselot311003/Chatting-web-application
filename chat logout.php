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
    $a=$_SESSION['k1'];
    $con=mysqli_connect('localhost','root','','student');
    $q="delete from online where Username='$a'";
  
    $rl=mysqli_query($con,$q);
    
    
        
    


    echo"<script>
    window.location='one two onechat.php';
    </script>";
    ?>
    
</body>
</html>