<?php require("../connections/connection.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/1d21732f61.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    fieldset {
  border: 1px solid white;
  margin: 200px auto;
  width: 50%;
  padding: 20px;
  border-radius:20px;
}

legend {
  color: white;
  font-weight:bolder;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

input[type="text"],
input[type="email"] {
  margin-bottom: 10px;
  padding: 10px;
  border: none;
  border-radius: 5px;
  width: 100%;
}

input[type="submit"] {
  background-color: white;
  color: black;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: black;
  color: white;
}

label{
  color:white;
  font-size:20px;
  margin-bottom:5px;
}
  </style>
</head>
<body class="" style="background-color:#2C3639;">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <img class="navbar-brand" style="width:40px;height:40px;cursor:pointer" src="../Images/logo.png"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item mx-3 bg-success rounded-pill">
        <!-- user login name -->
          <a class="nav-link text-light" href="#"><?php echo str_replace("'"," ",$_GET['username'])?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../main.php?username=<?php echo $_GET['username']?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li><a class="dropdown-item active" href="./Menu_elemtns/profile.php?username=<?php echo $_GET['username']?>">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <ul class=" navbar nav p-0">
        <li class=" nav-item"><a type="submit" name="sub" href="../home.html" class=" nav-link text-danger">
        <i class="fas fa-door-open fs-5"></i> Sign Out
        </a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- GET EMAIL -->
<?php  
$username = $_GET['username'];
$d = $countCv->query("SELECT * FROM users where username = $username");
while($row=$d->fetch(PDO::FETCH_ASSOC)){
  $email = $row['email'];
}
?>
<div class="container mt-lg-5">
  <fieldset>
  <legend>Profle</legend>
    <form action="" method="POST">
      <label for="a">Username : </label>
      <input type="text" name="updateName" id="a" value="<?php echo str_replace("'"," ",$_GET['username'])?>">
      <label for="w">Email : </label>
      <input type="email" name="updateEmail" id="w" value="<?php echo  $email?>" >
      <input type="submit" name="submit" value="Update">
    </form>
  </fieldset>
  <?php
$data = $countCv->query("SELECT * FROM counters INNER JOIN users ON counters.user_id = users.id;");
while($row=$data->fetch(PDO::FETCH_ASSOC)){
  $count = $row['counter'];
}
?>

<?php
if(isset($_POST['submit'])){
  $newEmail = $_POST['updateEmail'];
  $oldName = $_GET['username'];
  $newUsername = $_POST['updateName'];
  $connection -> exec("UPDATE  users SET username = '$newUsername', email = '$newEmail' WHERE username =$oldName;");
?>

<div class=" alert alert-success fixed-bottom myalert">Account Succefuly Updated</div>

<?php
}
?>
</div>
<script>
  let alert = document.querySelector(".myalert");
  setTimeout(function(){
  alert.style.display = "none"
},2500);
</script>
</body>
</html>





