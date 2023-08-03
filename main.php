<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GalleryDrive</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/1d21732f61.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    #div2 > *{
      margin-top:6px !important;
    }
    #profile-image,#profile-image0{
      background-image:url('./Images/cv_photo_profile.png');
      background-size:cover;
    }

    #profile-image:hover{
      opacity:0.8;
    }

    .bg-primary:hover{
      opacity:0.8;
    }
    blockquote{
      text-transform:uppercase;
    }


    i{
      font-size:20px;
      
    },
    .ul-education,.ul-work,.ul-certaficate{
      list-style-type: disc !important;
    }

    ul{
      list-style:none !important;
    }
    ul li{
      list-style:none !important;
    }


  </style>
</head>
<body   style="overflow-x:hidden;height:1000px;background-color:#2C3639;">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <img class="navbar-brand" style="width:40px;height:40px;cursor:pointer" src="./Images/logo.png"/>
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li><a class="dropdown-item" href="./Menu_elemtns/profile.php?username=<?php echo $_GET['username']?>">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <ul class=" navbar nav p-0">
        <li class=" nav-item"><a href="./home.html" class=" nav-link text-danger">
        <i class="fas fa-door-open fs-5"></i> Sign Out
        </a></li>
      </ul>
    </div>
  </div>
</nav>

<div style=" display:flex;margin:10px;margin-top:100px;color:white;position:relative;" class="containeru">
<!--div 1!-->
<div style="display:flex;width:50%;border:1px solid white;border-radius:20px;background-color:white;position:relative;padding:1px;height:auto" class="mx-2" id="div1">
<!--section 1-->
<div class="section" style="background-color:#9AC5F4;height:auto;width:auto;border-bottom-left-radius:20px;border-top-left-radius:20px;padding-top:3px;">
<div style="display:flex;justify-content:center">
  <img class="img-change  justify-content-center profile-image" src="./Images/cv_photo_profile.png" style="width:170px;height:170px;border:2px solid white;border-radius:50%;margin:20px ;align-text:center;cursor:pointer;float:end;" id="">
</div>
<div class="section2-container ps-2 text-dark mt-5">
<table >
  <tr>
    <td><p class=" text-dark"><b><i class="fas fa-envelope"></i></b></p> </td>
    <td> <p class="email-reponse" style="font-size:14px;" > &nbsp;<b id="email">Email</b></p></td>
  </tr>
  <tr>
    <td><p><b><i class="fas fa-calendar"></i></b></p></td>
    <td><p class="birthday-reponse" >&nbsp;<b id="date">birthday</b></p></td>
  </tr>
  <tr>
    <td><p><b><i class="fas fa-genderless"></i></b></p></td>
    <td class="gender-reponse" ><p>&nbsp;<b id="gender">Man</b></p></td>
  </tr>
  <tr>
    <td>
    <p><b><i class="fas fa-phone" style="font-size:16px;"></i></b></p>
    </td>
    <td>
      <p class="phone-reponse" ><b id="phone">phone Number</b></p>
    </td>
  </tr>
  <tr>
    <td><b> <i class="fas fa-location-arrow"></i></b></td>
    <td ><b id="adress">Location</b></td>
  </tr>
  <tr class=" mt-2">
    <td><b><i class="fas fa-paperclip"></i></b></td>
    <td >
      <b id="websites">Website Link</b>
  </td>
  </tr>
</table>
</div>
</div>
<!--section 2-->
<div class="section-2" style="color:black;padding-top:2px;padding:6px;height:100%;width:70%;position:relative;border-bottom-right-radius:20px;border-top-right-radius:20px">
<h2  class="text-dark text-center mb-5" id="full-name">Full Name</h2>
<div class="objectives">
<h4>OBJECTIVE : </h4>
<hr style="background-color:black">
<p style="" id="objective">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum beatae iste modi sapiente commodi impedit mollitia placeat blanditiis eaque repudiandae aliquid corrupti ipsam debitis, minima animi veritatis cupiditate rem perspiciatis!
Quod vitae vel minima eum nihil nam ullam illo sunt aliquam dolores repudiandae dolorum, praesentium aspernatur voluptatibus. Fugiat culpa illum asperiores dicta voluptatem ducimus, suscipit dignissimos nam enim sequi minus.
Quaerat accusantium eos ullam cum excepturi asperiores maiores. Animi quae nemo exercitationem molestiae doloremque voluptatem quo, nobis iusto tempora saepe aperiam, harum eligendi nulla? Vero eaque debitis praesentium quia neque?
Asperiores obcaecati iste pariatur itaque! Fugiat dolor officiis recusandae at facere error quis doloribus eveniet repellendus molestiae reprehenderit et necessitatibus dolore quae adipisci veritatis, esse odio accusamus vel totam distinctio.
Commodi eius ipsum architecto dolorem illum minus labore earum voluptaias doloribus, quisquam veniam maxime ipsa ad quas praesentium. Fugit beatae doloribus laborum.</p>
</div>
<div class="education mt-4">
  <h4>EDUCATION : </h4>
  <hr style="background-color:black">
  <ul class="ul-education" type="disc">
  <li class="add1" style="list-style:none;opacity:0.5;cursor:pointer;">Add +</li>
    <li class="d-flex li-education "><p id="from" style="font-size:16px;"><blockquote contenteditable="True">2004 TO 2010 : HIGHT SCHOOL </blockquote></li>
  </ul>
</div>
<div class="work-experience mt-4">
  <h4>WORK EXPERIENCE : </h4>
  <hr style="background-color:black">
  <ul class="ul-work" type="disc">
  <li class="add2" style="list-style:none;opacity:0.5;cursor:pointer;">Add +</li>
    <li class="li"><blockquote contenteditable="True">2011 TO 2016 : CYBERSECURITY IN GOOGLE</blockquote></li>
  </ul>
</div>
<div class="certifications">
  <h4>CERTAFICATIONS :</h4>
  <hr style="background-color:black">
  <ul class="ul-certaficate" type="disc">
  <li class="add3" style="list-style:none;opacity:0.5;cursor:pointer;">Add +</li>
  <li class="li"><blockquote contenteditable="True">2018 TO 2020 : CODEACADEMY CERTAFICATE</blockquote></li>
  </ul>
</div>
</div>
</div>

<!--download button-->
<div class="btn btn-primary p-2" id="download-btn" style="position:fixed;bottom:20px;left:300px;z-index:101;width:200px;border-radius:20px;">Download <i class="fas fa-down-long" style="font-size:16px;"></i></div>

<!-- div2!-->
<div class="mx-2"  style="width:50%;height:auto;border:1px solid white;padding: 20px;background-color:#3F4E4F;border-radius:20px" id="div2">
<div style="display:flex;justify-content:center">
  <img class="img-change  justify-content-center profile-image" src="./Images/cv_photo_profile.png" style="width:170px;height:170px;border:2px solid white;border-radius:50%;margin:20px ;align-text:center;cursor:pointer;float:end;">
</div>
<input type="file" name="" id="input-file" class=" form-control" value="Upload +">
<div class="input-full-name" >
<label for="full-name" class=" fw-bolder" >Full name</label>
<input type="text" class=" form-control" placeholder="YOUR COMPLETE NAME" id="full-name-input">
</div>
<div class="input-email">
<label for="full-name" class=" fw-bolder">Email</label>
<input type="text" class=" form-control" placeholder="example@gmail.com" id="email-input">
</div>
<div class="input-birthday">
<label for="full-name" class=" fw-bolder">Date Of Birthday</label>
<input type="date" class=" form-control" id="date-input">
</div>
<div class="input-gender">
  <label for=""></label>
<select class="form-select" id="select" aria-label="Default select example">
  <option selected class=" fw-bolder ">Gender</option>
  <option value="1">Man</option>
  <option value="2">Female</option>
</select>
</div>
<div class="input-phoneNumber">
<label for="full-name" class=" fw-bolder">Phone Number</label>
<input type="text" class=" form-control" id="phone-input" value="+212 ">
</div>
<div class="input-Adress">
<label for="full-name" class=" fw-bolder">Adress</label>
<input type="text" class=" form-control" id="adress-input" placeholder="Morocco/Nador/..">
</div>
<div class="input-WebSite">
<label for="full-name" class=" fw-bolder">WebSite</label>
<input type="text" class=" form-control" id="website-input" placeholder="Optional : link/section.com">
</div>
<div class="input-Objective">
<label for="full-name" class=" fw-bolder">Objective</label>
<textarea type="text" class=" form-control" placeholder="About Your Objectives" id="objective-input"></textarea>
</div>
</div>
</div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="./Scripts/main.js"></script>
  <script>
// change profile photo
<?php $counter = 0?>
var inputFile = document.getElementById("input-file");
var image_div2 = document.querySelector(".profile-image");
var image_div1 = document.querySelectorAll(".profile-image")[1];
inputFile.onchange = function () {
  var file = inputFile.files[0];
  var reader = new FileReader();

  reader.onload = function (e) {
    image_div2.src = e.target.result;
    image_div1.src = e.target.result;
  };

  reader.readAsDataURL(file);
};
    $(document).ready(function(){
    $("#download-btn").on("click",function(){
      $(".add1").hide()
      $(".add2").hide()
      $(".add3").hide()
      $("body").css({"margin":"0px","padding":"0px"})
      $("body").addClass("fixed-top")
        $("#div1").css({"top":"0px"})
      $(".section").css({"margin-left":"-15px"})
    var element = document.getElementById("div1");
    var div2 = document.getElementById("div2");
    var section = $(".section")
    $(section).css({"min-height" : "1115px"})
    $(element).css({
      width:"100%",
      height:"auto",
    });
    $(div2).hide(1000)
    var name =  document.getElementById("full-name").innerText;  
    html2pdf().set({filename:name+"CV.pdf"}).from(element).save();
  }),
  $(".add1").on("click",function(){
    var newli = $('<li><blockquote contenteditable="true" style="text-transform: uppercase;"><p>click to add your other educatin carrer</p></blockquote></li>').css({"margin-left":"0px","list-style":"disk"})
    newli.appendTo(".ul-education");
  }),
  $(".add2").on("click",function(){
    var newli = $('<li><blockquote contenteditable="true" style="text-transform: uppercase;"><p>click to add your other work experience carrer</p></blockquote></li>').css({"margin-left":"0px","list-style":"disk"})
    newli.appendTo(".ul-work");
  }),
  $(".add3").on("click",function(){
    var newli = $('<li><blockquote contenteditable="true" style="text-transform: uppercase;"><p>click to add your other certaficate carrer</p></blockquote></li>').css({"margin-left":"0px","list-style":"disk"})
    newli.appendTo(".ul-certaficate");
  })
  $("#select").on("change",function(){
    var selectedValue = $(this).find("option:selected")
    $("#gender").text(selectedValue.text());
  })
    })



  </script>
</body>
</html>

<?php
/*
require("./connections/connection.php");
$userName = $_GET['username'];
$countCv->exec("INSERT INTO counters(user_id,counter) VALUES((SELECT ID FROM USERS WHERE USERNAME = $userName),$counter);");
*/
?>