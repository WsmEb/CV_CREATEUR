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
  <link rel="stylesheet" href="sign_up.css">
</head>
<body class=" bg-dark">
  <h1>Get Started With Your Account</h1>
  <fieldset>
    <h2>Sign Up</h2>
    <form action="" method="post">
      <label for="a">Username</label>
      <input type="text" name="username" id="a"  autofocus class=" form-control" required>
      <label for="b">Email</label>
      <input type="email" name="email"  id="b" class=" form-control" required>
      <label for="c">Password</label>
      <input type="password" name="password"  id="c" class=" form-control" required>
      <input type="submit" value="Register" class=" btn btn-outline-light" name="submit">
    </form>
  </fieldset>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="../Scripts/sign_up.js"></script>
</body>
</html>

<?php

if(isset($_POST['submit'])){
  function Verify($Field){

    $data = stripcslashes($Field);
    $data = htmlspecialchars($data);
    return $data;
  
  };
$username = Verify($_POST['username']);
$email = Verify($_POST['email']);
$password = Verify($_POST['password']);
$date_now = date("y-m-d H:i:s");
$insert = "INSERT INTO users(username,email,password,date_inscr) VALUES('$username','$email','$password','$date_now');";
$connection->exec($insert);

// header to sign in;

?>
<div class="alert alert-success fixed-bottom">Accoutn Succefuly Created</div>
<?php
header("Refresh:2;url=./sign_in.php");
}
?>
