<?php

require("C:/xampp/htdocs/PHP/FIN ETUDE PROJECT/connections/connection.php");

$admin_username = $connection->query("SELECT * FROM admin;");

while($row=$admin_username->fetch(PDO::FETCH_ASSOC)){
  $username = $row['username'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./update.css">
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
          <a class="nav-link " aria-current="page" href="./panel.php">Admin Panel</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="./update.php">Update Information</a>
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
</body>
</html>

<div class="container" style="margin-top:90px;">
  <h2>Welcome <?php echo $username?></h2>
</div>

<form action="" method="post" style="margin:70px;margin-left:500px;width:400px">
<h4 class="my-5" style="margin-left:-30px;">Update Informations : </h4>
  <input type="text" name="adminName" class=" form-control" placeholder="Admin Name">
  <input type="password" name="password" class=" form-control" placeholder="Admin Password">
  <input type="submit" value="Update" name="submit" class=" btn btn-outline-success mt-1">
</form>

<?php

if(isset($_POST['submit'])){
  $newName = $_POST['adminName'];
  $newPassword = $_POST["password"];
  $connection->exec("UPDATE admin SET username='$newName',password='$newPassword';");
?>

<div class=" alert alert-success fixed-bottom myalert">Admin Information Succefuly Updated</div>
<?php
}
?>

<script>
    let alert = document.querySelector(".myalert");
  setTimeout(function(){
  alert.style.display = "none"
},2500);
</script>