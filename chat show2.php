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
     $a=$_POST['k4'];
     $b=$_SESSION['k1'];
     $con=mysqli_connect('localhost','root','','student');
     $q="select * from chat2 where (sentby='$b' and sentto='$a') or (sentby='$a' and sentto='$b') ";
     $rl=mysqli_query($con,$q);
     while($row=mysqli_fetch_array($rl)){
        
        if($row['sentby']==$_SESSION['k1'])
        {
        echo"<p>$row[sentby] : $row[message]</p>";
     }
     else{
        echo"<p style='margin-left:50%'>$row[sentby] : $row[message]</p>";
     }
     

     }
    
    ?>
</body>
</html>