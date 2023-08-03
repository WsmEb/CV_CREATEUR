<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/1d21732f61.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class=" bg-dark">



<!-- form Admin login-->
  <div class="container mt-5 w-50">
  <fieldset>
    <form action="" method="post">
      <h2>Admin Login : </h2>
      <input type="text" name="username"  class=" form-control" placeholder="username">
      <input type="password" name="password"  class=" form-control" placeholder="password">
      <input type="submit" name="submit" value="Log in" class=" btn btn-outline-success">
    </form>
  </fieldset>
  </div>
</body>
</html>

<?php
require("C:/xampp/htdocs/PHP/FIN ETUDE PROJECT/connections/connection.php");

if(isset($_POST['submit'])){
  $admin_data = $connection->query("SELECT * FROM admin;");
  $post_username = $_POST['username'];
  $post_password = $_POST['password'];
  while($row=$admin_data->fetch(PDO::FETCH_ASSOC)){
    $username = $row['username'];
    $password = $row['password'];
    if($username == $post_username && $password == $post_password){
      header("Refresh:0.01;url=panel.php");
      exit();
    }else{
      ?>
      <div class=" alert alert-danger fixed-bottom">Incorrect Information Please Try Again .</div>
    <?php
    }
  }
}

?>