<?php

$link=mysqli_connect("localhost","","","");
 if(mysqli_connect_error()){
   die(" There was an error in accesing data from database.");
 }
 $error = ""; $successMessage = "";

 if ($_POST) {

   if (!$_POST["fname"]) {

       $error .= "A first name is required.<br>";

   }
   if (!$_POST["lname"]) {

       $error .= "A last name is required.<br>";

   }

     if (!$_POST["email"]) {

         $error .= "An email address is required.<br>";

     }

     if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {

         $error .= "The email address is invalid.<br>";

     }

     if ($error != "") {
      $error = '<div><p>There were error(s) in your form:</p>' . $error . '</div>';
     } else {
       $successMessage  = '<p>Thank you for participating.<br>You have submited correctly.</p>';
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];
       $query = "INSERT INTO `contactList` (`fname`,`lname`,`email`)
        VALUES ('".mysqli_real_escape_string($link,$fname)."',
        '".mysqli_real_escape_string($link,$lname)."',
        '".mysqli_real_escape_string($link,$email)."')";
       mysqli_query($link, $query);
     }
 }
?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="zoom_fix.js"></script>
    <meta name="viewport" content="width=1920px, initial-scale=1">
  <link rel="shortcut icon" href="assets/WjGTnKGQ_400x400.png">
  <title>Contact</title>

  <link href = "stuff.css" rel="stylesheet" type="text/css">
</head>

<body onload="
var isMac = navigator.platform.toUpperCase().indexOf('MAC')>=0;
document.body.style.zoom = getZoomValues()*(window.screen.height)/1080;
document.getElementById('headertext').style.opacity='1';
">

  <div style="height:65%; width:100%;position:absolute;z-index:-1;  overflow:hidden;"id="video">
    <video id="myvideo" data-mute="muted" loop="loop" preload="auto" autoplay="autoplay" class="background" playsinline style ="width:100%" >
      <source type="video/mp4" src="https://static.videezy.com/system/resources/previews/000/013/089/original/Smoke_8_-_40s_-_4k_res.mp4">
    </video>
    <script> document.getElementById('myvideo').play();</script>
  </div>
  <div class = "header">
    <div style = "height:5%; width:100%;"></div>
    <div class= "outer">
      <div style = "float:left; height:100%;"><a href = "index.php" class = "weblinks"><img src= "assets/WjGTnKGQ_400x400.png" style = "height:100%"></a></div>
          <a class = "weblinks" href = "about.php"><div class="options">THE PROBLEM</div></a>
          <a class = "weblinks" href = "whatwedo.php"><div class="options">WHAT WE DO</div></a>
          <a class = "weblinks" href = "ease.php"><div class="options">EASE OF ACCESS</div></a>
          <a class = "weblinks" href = "contact.php"><div class="options">CONTACT</div></a>
          <a class = "weblinks" href="donate.php"><div  class="options" >DONATE</div></a>

        </div>
    <div id = "headertext" style="
    opacity:0;
    color:white;
    margin: 0 auto;
    display: flex;
    width:50%;
    align-items: center;
    font-family: 'Rubik Mono One', sans-serif;
    height:50%;
    font-size:50;
    transition: opacity 2s;
    -webkit-transition: opacity 2s; /* Safari */">
      CONTACT
    </div>
    <div class = "medialist">
      <div class="media"><a href = "https://www.facebook.com/Teen-E-Cigarette-Abuse-Prevention-741420492942129/?modal=admin_todo_tour" ><img class = "icon" src = "assets/facebook icon.png"></a></div>
      <div class = "media"><a href = "https://www.instagram.com/?hl=en" ><img class = "icon" src = "assets/Instagram_AppIcon_Aug2017.png"></a></div>
      <div class = "media"><a href = "https://twitter.com/cigarette_teen"><img class = "icon" src= "assets/Twitter_Logo_Blue.png"></a></div>
    </div>
  </div>
<div style="height:20%;width:25%; background-color:black;position:absolute;transform:translate(150%,10%);text-align:center;font-family: 'Arvo', serif;font-size:175%;color:white;">
  <p></p>
</br>
  <p></p>
Join our email list to be notified of semminars we are hosting and to be notified of how you can change laws pertaining to vaping in 2020.</br>
We do not send spam.
<p></p>
</br>
For our social media pages, please use the links above.
</div>
  <div style="height:50%;background-color:black;color:white;font-family: 'Arvo', serif;">
    <div style="float:left;width:50%">
      <h1>Contact Info:</h1>
      <p style="font-size:150%;">Email: contact@te-ap.com</p>
      <p style="font-size:150%">
        Mailing Address:</br>
        Teen E-Cigarette Abuse Prevention (TEAP)</br>
        3984 Washington Blvd</br>
        Fremont California
      </br>
      <p style="font-size:150%">If you have any inquiries,</br>please feel free to contact</br>us using the contact</br>information above.</p>
      </p>
    </div>
    <div style="float:left;width:50%">
      <div style="background-color:black;font-family: 'Arvo', serif;font-size:125%;float:right; margin-right:15%;height:30%; width:41%;text-align:center;"><?php echo $error.$successMessage; ?></div>
      <form id="form1" method="post" action="#form1">
        <p><input name = "fname" type = "text" placeholder="First Name" class = "entry"></p>
        <p><input name = "lname" type = "text" placeholder="Last Name" class = "entry"></p>
        <p><input name = "email" type = "text" placeholder="Email" class = "entry"></p>
        <a href="#form1"><p><input type = "submit" value="Submit" class = "entry"></p></a>
      </form>
    </div>

  </div>
  <div style="width:100%; height:30%;text-align:center;font-family: 'Arvo', serif;font-size:175%;">
<p>About Us</p>




  </div>

</body>


</html>
