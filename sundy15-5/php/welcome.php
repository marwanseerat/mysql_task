<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
        

        .login-box1{
    width: 514px;
    height: 436px;
  margin: auto;
  border: 5px solid #49c1a2;
    border-radius: 5px;
    text-align: center;
    color: white;
}
        h4{
            font-size:25px;
           
        }
        body{
            background-image:url("https://i.gifer.com/8CPR.gif");
            background-repeat: no-repeat;
            background-size: cover;
           
        }
        
    </style>
</head>
<body>
<div class="login-box1">
        <h1> Welcome <?php echo  $_SESSION["user_fname"]. " ". $_SESSION["user_mname"] ." ".  $_SESSION["user_lname"] ." " .  $_SESSION["user_faname"]?>! </h1>
        <h4> <b>your email is:</b> <?php echo "<p style='color:#ffee6f; font-size:30px;'>" . $_SESSION["userEmail"] . "</p>" ?> and your phone number is: <?php echo "<p style='color:blake; font-size:30px; '>" . $_SESSION["userMobile"] . "</p>" ?> </h4>
    </div>
</body>
</html>