
<?php
?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="zoom_fix.js"></script>
  <link rel="shortcut icon" href="assets/WjGTnKGQ_400x400.png">
  <title>Donate</title>
    <meta name="viewport" content="width=1920px,height=1080px,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href = "stuff.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
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
          <a class = "weblinks" href="donate.php"><div  class="options">DONATE</div></a>

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
      DONATE
    </div>
  </div>
  <div style="float:left; width:100%; height:17%;background-color:black;color:white">
    <p style="font-size:250%; font-family: 'Arvo', serif;text-align:center;">You can make a difference by donating.</br> Your money will be used to:</p>
  </div>
  <div style="float:left;width:33.33%;font-family: 'Arvo', serif; height:60%;float:left;display:flex;flex-direction:column;align-items:center;">

      <p style="font-size:200%">Contacting/Working With Politicians</p>
        <img src="https://img.icons8.com/ios-filled/100/000000/us-capitol.png">
      <p style="font-family: 'Arvo', serif; font-size:175%; text-align:center;">It is our long term goal to change the law to supress the access to vapes and provide more material
      in school so students are informed of the ill effects of vaping. To do this, we must contact and support politicians whose views match our values by supporting their campaign.</p>
  </div>

  <div style="float:left;width:33.33%;font-family: 'Arvo', serif; height:60%;float:left;display:flex;flex-direction:column;align-items:center;">

      <p style="font-size:200%">Advertising</p>
        <img src="https://img.icons8.com/ios-filled/100/000000/web-advertising.png">
      <p style="font-family: 'Arvo', serif; font-size:175%; text-align:center;">Your donations will be used to create advertisements that relate to students.Our
      main platforms will consist of Facebook and Instagram as our target audiece of middle school students, high school studnets, and adults primarly use those two social media.

    </p>
  </div>
  <div style="float:left;width:33.33%;font-family: 'Arvo', serif; height:60%;float:left;display:flex;flex-direction:column;align-items:center;">

      <p style="font-size:200%">Host and Improve Seminars</p>
        <img src="https://img.icons8.com/ios-filled/100/000000/conference.png">
      <p style="font-family: 'Arvo', serif; font-size:175%; text-align:center;">Donations will be used to host more seminars at more schools.
        They will also be used to imporve the quality of these seminars (providing engaging activities, more guest speakers, and etc).</p>
  </div>
  <div style="width:100%;float:left;height:50%;background-color:black;color:white;">
    <div style="width:40%; height:100%;float:left;">
      <p style="font-family: 'Arvo', serif;font-size:200%; margin:10%;">To donate, please type in the desired amount. Then,click on any of the payment methods below.
        We request a minimum doantion amount of one dollar due to proccesing fees. Sorry for the inconvenience.
      </p>
    </div>
    <div style="width:60%;float:left;height:100%:">
    <div style="float:right;width:100%;font-family: 'Arvo', serif;background-color:black;color:white;">
      <form id="form2" method="post" onsubmit="return false" style="background-color:black;color:white;margin-top:10%;margin-bottom:5%;">
          <input type="number" name="money" id="money" min="1"step="0.01" value="1" style="height:8%;font-size:125%;float:right;margin-bottom:2%;margin-right:25%;">
      </form>

    </div>
    <div id="paypal-button-container" style="width:60%; float:right;background-color:black;color:white;margin-right:10%;;"></div>

  <?php include ('script.php') ?>
  </div>
  </div>
</br>
  <a class="weblinks" href="https://icons8.com/icon/8951/conference" style="color:white !important">Conference icon by Icons8</a></br>
  <a class="weblinks" href="https://icons8.com/icon/9885/us-capitol" style="color:white !important">US Capitol icon by Icons8</a></br>
  <a class="weblinks" href="https://icons8.com/icon/61970/web-advertising" style="color:white !important">Web Advertising icon by Icons8</a></br>
</body>


</html>
