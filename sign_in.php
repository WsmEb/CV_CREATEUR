<?php require("../connections/connection.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="web icon" href="../Images/logo.png">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="sign_in.css">
</head>
<body class=" bg-dark">
<h1>Log In To Your Account</h1>
  <fieldset>
    <h2>Log in</h2>
    <form action="" method="post">
      <label for="a">Username</label>
      <input type="text" name="username" id="a"  autofocus class=" form-control" required>
      <label for="c">Password</label>
      <input type="password" name="password"  id="c" class=" form-control" required>
      <input type="submit" value="LOGIN" class=" btn btn-outline-light" name="submit">
    </form>
  </fieldset>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="../Scripts/sign_in.js"></script>
</body>
</html>

<?php

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $data = $connection->query("SELECT * FROM users;");

  while($row=$data->fetch(PDO::FETCH_ASSOC)){
    $dbusername = $row['username'];
    $dbpassword = $row['password'];

    if($username == $dbusername && $password == $dbpassword){
      header("location:../main.php?username='$username'");
      exit();
    }else{
    ?>
    <div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
  <strong>INCORECT INFORMATION!</strong> please check your information and try again.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php
    }
}}  

?>


