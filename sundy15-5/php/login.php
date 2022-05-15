<!-- 
// session_start();
// $_SESSION['lastLogin']=setCookie('lasttime', time(), time()+604800);
// if(isset($_POST['btn'])){
// $email = $_SESSION['email'];
// $pass = $_SESSION['pass'];

// if($email == $_POST['email'] && $pass == $_POST['pass']){
//     header('location:welcome.php');
// }else{
//     echo 'incorrect password and email';
// }
//    if($email == 'test@gmail.com' && $pass == 'Aabc123'){
//     header('location:admin.php');
//    }

// }

//   -->

<?php
// session_start();

include_once '"./config/connection.php"';

if(isset($_POST['btn'])){

    $loginEmail=$_POST['email'];
    $loginPass=$_POST['password'];
    // $email=$_SESSION['email'];
    // $pass=$_SESSION['password'];
    
    // foreach ($_SESSION["usersData"] as $key => $value){
        $sql1="SELECT * FROM phpform ;";
        $result= mysqli_query($con , $sql1);
        $result_check= mysqli_num_rows($result);
    
        if ($result_check > 0) {
            while ($row=mysqli_fetch_assoc($result)) {
if (($loginPass == $row['password']) && ($loginEmail == $row['email'])){

    // $_SESSION["userEmail"]= $value["email"];
    // $_SESSION["user_fname"]= $value['firstname'];
    // $_SESSION["user_mname"]= $value['middlename'];
    // $_SESSION["user_lname"]= $value['lastname'];
    // $_SESSION["user_faname"]= $value['familyname'];
    // $_SESSION["userMobile"]= $value['phonenumber'];
    // $_SESSION["usersData"][$key]["Last-Login-Date"]= date("d-m-Y - h:ia");
    // $_SESSION["usersData"];

    header ("location: welcome.php");
   
    
}
elseif($loginPass !== $row['password']) {
    $PasswordErr="<span style=' color:red'>Incorrect Password</span><br>";



}
elseif($loginEmail !== $row['email']){
    $EmailERR="<span style=' color:red'>Incorrect Email</span><br>";
}
};




///////////////////////////////////// admin ////////////////////////
if(($loginEmail == "marwa@gmail.com") && ($loginPass == "Admin*1234")){
    header ("location: admin.php");
}

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <style><?php include "sign-up.css" ?></style>
    
</head>
<body>
   <div class="login-box">
       <h1>Login</h1>
       <h4>welcom back ! Login with your credentials</h4>
       <form action="login.php" method="post">
        <label >Email</label>
		<input type="email" name="email">
        
        <br>
        <?php if(isset( $EmailERR)){echo  $EmailERR;}?>
		<label >Password</label>
		<input type="password" name="password" >
        
        <br>
        <?php if(isset( $PasswordErr)){echo  $PasswordErr;}?>
        <button class="btn" type="submit" name="btn" style="width: 57%;height: 5%;margin-top: 32px;background: #072227;color: white; border: none; margin-left: 22%; padding:10px;">Login</button>
       </form>
   </div> 
   <p>Not have an account ? <a href="sign-up.html"> Sign up</a></p>
</body>
</html>