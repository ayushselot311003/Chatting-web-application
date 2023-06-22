<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .t1{
            width:500px;
            height:600px;
            background-color:pink;
            float:left;
            margin:10px;
        }
        .t2{
            width:500px;
            height:600px;
            background-color:blue;
            float:left;
            margin:10px;
        }
        .t3{
            width:100px;
            height:100px;
            background-color:white;
           
        }
        </style>
         <script src="jquery-3.7.0.min.js"></script>
    <script src="jquery.validate.min.js"></script>
</head>
<script>
    
    $(document).ready(function(){

        $("body").on('click','.online',function(){
           // alert("aaa")
           $("#z").html($(this).text());
           var c=$("#z").text();
           setInterval(function(){
            $.post('chat show2.php',{k4:c},function(data){
                $("#t1").html(data);

            });
        },1000);
        });




        $("#y").click(function(){
            var a=$("#x").val();
            var b=$("#z").text();
            $.post('chat2.php',{k2:a,k3:b},function(data){
                $("x").html(data);
                document.getElementById('x').value='';


            });
           

        });
        setInterval(function(){
           
            $.post('online show.php',{},function(data){
                $("#t3").html(data);

            });

        },1000);
   
        

    });
    </script>
<body>
    <p id='z'></p>
    <div class='t1' id="t1"></div>
    <div class='t2' id="t2"><p>Online users</p>
<div id='t3'></div></div>

    
    <div class='t3'>
    <input type='text' placeholder='Type your message here' id='x'>
    <input type='button' value='send' id='y'><br>
   <a href='chat logout.php'> <input type='button' value='logout'></a>


</div>


    
</body>
</html>