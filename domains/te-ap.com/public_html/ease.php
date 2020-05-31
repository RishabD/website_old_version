<?php
?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="zoom_fix.js"></script>
    <meta name="viewport" content="width=1920px, initial-scale=1">
  <link rel="shortcut icon" href="assets/WjGTnKGQ_400x400.png">
  <title>Ease of Access</title>
  <link href = "stuff.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

</head>
<body onload="
var isMac = navigator.platform.toUpperCase().indexOf('MAC')>=0;
document.body.style.zoom = getZoomValues()*(window.screen.height)/1080;
document.getElementById('headertext').style.opacity='1';
">
  <div style="height:65%; width:100%;position:absolute;z-index:-1;  overflow:hidden;"id="video">
    <img src="assets/Ease.jpg" style="width:100%;">
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
    -webkit-transition: opacity 2s; /* Safari */
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black;"
    >
      EASE OF ACCESS
    </div>
  </div>
  <div style="font-family: 'Arvo',serif; font-size:300%;display:flex; justify-content:center; align-items:center;background-color:black; color:white;">
      <p>Nicotine is now easier to get than ever before.</p>
  </div>
  <div style="float:left;width:50%;font-family: 'Arvo', serif;float:left;display:flex;flex-direction:column;align-items:center;">

      <p style="font-size:200%;margin:2%;">No Background Check</p>

      <p style="font-family: 'Arvo', serif; font-size:175%; text-align:center;padding:2%;margin:0;">
        Most vape distributions such as Suorin and other brands do not requie basic identification when purchasing a vape.
        They just require the customer to validate their age by hitting a check box saying "I am over 18." In short, <b>they don't check the age of the customer.</b>
    </p>
  </div>
  <div style="float:left;width:50%;font-family: 'Arvo', serif;float:left;display:flex;flex-direction:column;align-items:center;">

      <p style="font-size:200%;margin:2%;">Unvalidated Methods of Payment</p>

      <p style="font-family: 'Arvo', serif; font-size:175%; text-align:center;padding:2%;margin:0;">
        Many online E-Cigarette stores allow payments using prepaid cards. This means that they don't recieve information on from whom the money is
        coming from. Basically, <b>they don't care who purchases their products.</b>
    </p>
  </div>

</body>
</html>
