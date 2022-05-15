<?php
session_start();
setCookie('FirstName', date("H:i:s-m/d/y"), 60*24*60*60+time());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Welcome Page </title>
    <style>
        h1{
            margin-top:5%;
            text-align:center

        }
        h3{
            margin-top:3%;
            margin-bottom:3%;
            text-align:center
        }

        table{
            border: 2px solid black;
        }
    </style>
</head>
<body>
 
    <h1 > Welcome Admin ! <h1>
        <h3 > Your Can See Details Here :</h3>

        <div class="container">
<table class="table table-bordered border-secondary"  >
  <thead class="table-success" >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Date Created</th>
      <th scope="col">date last login</th>
    </tr>
  </thead>
  <tbody>
  <?php
$id= 1;
foreach ($_SESSION['usersData'] as $value) {
    echo "<tr>
    <td>".$id."</td>
    <td>".$value['firstname']."</td>
    <td>".$value['email']."</td>
    <td>".$value['password']."</td>
    <td>".$value['date_create']."</td>
    <td>".$value["Last-Login-Date"]."</td>
</tr>";
}  
    ?>

  
   
  </tbody>
</table>
</div>
<?php echo '<br><br> <a href="index.php"><input style="margin-left:78%" class="btn btn-success btn-lg" type="button" name="logout" value="LOGOUT"></a>'; ?>

</body>
</html>