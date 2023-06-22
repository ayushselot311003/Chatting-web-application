 
</head>
<body>
    <?php
   
    $con=mysqli_connect('localhost','root','','student');
    $q="select * from online";
    $rl=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($rl))
    {
        echo"<p class='online' id='g'>$row[Username]</p><br>";

    }
    ?>
    
 