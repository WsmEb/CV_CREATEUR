<?php

require("C:/xampp/htdocs/PHP/FIN ETUDE PROJECT/connections/connection.php");

$admin_username = $connection->query("SELECT * FROM admin;");

while($row=$admin_username->fetch(PDO::FETCH_ASSOC)){
  $admin_name = $row['username'];

  $getUsers = $connection->query("SELECT * FROM users;");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/1d21732f61.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <img class="navbar-brand" style="width:40px;height:40px;cursor:pointer" src="../Images/logo.png"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="./main._admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./panel.php">Admin Panel</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./update.php">Update Information</a>
        </li>

      </ul>
      <ul class=" navbar nav p-0">
        <li class=" nav-item"><a href="../home.html" class=" nav-link text-danger">
        <i class="fas fa-door-open fs-5"></i> Sign Out
        </a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:90px;">
  <h2>Welcome <?php echo $admin_name?></h2>

  <table class=" table table-hover table-borderless">
    <thead class=" bg-dark text-white">
      <tr>
        <th>#Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Login Date</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $id = 0;
      while($row=$getUsers->fetch(PDO::FETCH_ASSOC)){
        $id += 1;
        $username = $row['username'];
        $email = $row['email'];
        $password = sha1($row['password']);
        $date = $row['date_inscr'];

        echo "<tr>
        
        <td>$id</td>
        <td>$username</td>
        <td>$email</td>
        <td>$password</td>
        <td>$date</td>
        <td><a href='delete.php?username=$username' name='delete' class='btn btn-danger text-white p-2'>DELETE</a></td>
        
        </tr>";
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>