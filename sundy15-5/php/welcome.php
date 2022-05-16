<?php
// session_start();
include_once '../config/connection.php';

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

<h1 class="text-center"> Welcome
             <?php
              $sql1="SELECT * FROM signupform";
              $result= mysqli_query($con , $sql1);
              $result_check= mysqli_num_rows($result);
          
              if ($result_check > 0) {
                while ($row=mysqli_fetch_assoc($result)) {
                  $row=mysqli_fetch_assoc($result);
                 
                   
                echo  $row["first_name"]. " ". $row["middle_name"] ." ".  $row["last_name"]  ?> To Your Home Page! </h1>
                <p class="text-center">  your email is: <?php "<p style='color:#ffee6f; font-size:30px;'>" . $row["email"] . "</p>"; ?>, and your phone number is: <?php "<p style='color:blake; font-size:30px; '>" . $row["phone_number"] . "</p>";}
            }?> </p>
    </div>
</body>
</html>

          