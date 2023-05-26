<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lab08.css" type="text/css">


    <title>Nidhi Biswas Lab08</title>
</head>
<body>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto:ital,wght@1,700&display=swap');

.morning {
    background-image: url("https://images.pexels.com/photos/163255/sunrise-sun-morgenrot-skies-163255.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
    color: white;
    -webkit-text-stroke: 2px black;
    font-size: 150px;

}


*{
    background-color: #FEE140;
background-image: linear-gradient(90deg, #FEE140 0%, #FA709A 100%);

}
.afternoon {
    background-image: url("https://images.pexels.com/photos/69224/pexels-photo-69224.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
    color: white;
    -webkit-text-stroke: 2px black;
    font-size: 150px;
}


p {
    background-size:cover;
    padding: 300px ;
    font-size: 150px;
    align-self: none;
    background-repeat: no-repeat;
    text-align: center;

}

.problemFour {
            right:0;
            top:0;
           position: absolute;
            opacity: 0.6;
        }

.evening {
    background-image: url("https://images.pexels.com/photos/1237119/pexels-photo-1237119.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
    color: white;
    -webkit-text-stroke: 2px black;
    font-size: 150px;
}

.night {
    background-image: url("https://images.pexels.com/photos/631477/pexels-photo-631477.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
    color: white;
    -webkit-text-stroke: 2px black;
    font-size: 150px;
}

body {
    position: relative;
    font-family: 'Poppins', sans-serif;
}


</style>
   
   

    <div class="problemFour">
     <?php
     
         $query_img = $_GET["image"];
         $images = ['skeldance.gif', 'ghost1.gif', 'jack10.gif'];
        
         if (in_array($query_img, $images)) {
            echo "halloween image is "; 
            echo "<img src='$query_img'/>";
             
         }
         ?>
     </div>
    <?php
    
       
        $time = date("H");
       
        $timezone = date("Eastern/Canada");
        if ($time < "12") {
            echo '<div>
            <p class="morning">Good Morning!</p>
            </div>';
        } 
        elseif ($time >= "12" && $time < "19") {
            echo '<div>
            <p class="afternoon">Good Afternoon!</p>
        </div>';
        } 
        elseif ($time >= "19" && $time < "21") {
            echo '<div>
            <p class="evening">Good Evening!</p>
            </div>';
        } 
        else {
            echo '<div>
            <p class="night">Good Night!</p>
            </div>';
        }
        ?></div>


</div>

<form action="lab08b.php" method="post">
Number of rows: <input type="number" name="rows">
<br>
Number of columns: <input type="number" name="columns">
<br>
<input type="submit" class="button">




<?php 

if (!isset($_COOKIE['counter']))
{
    ?> 
Welcome! You are viewing this page for the very first time. :) 
<?php 
    $cookie = 1;
    setcookie("counter", $cookie);
}
else
{
    $cookie = ++$_COOKIE['counter'];
    setcookie("counter", $cookie);
    ?> 
    <br>
    
You are viewing this page for the <?= $_COOKIE['counter'] ?>th number of times. 
<?php  }// end else  ?> 


</body>
</html>