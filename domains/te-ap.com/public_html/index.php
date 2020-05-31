
<?php
?>

<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="zoom_fix.js"></script>
<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
  <link rel="shortcut icon" href="assets/WjGTnKGQ_400x400.png">
  <title>Home</title>
  <link href = "stuff.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">


</head>
<body onload=
"

var isMac = navigator.platform.toUpperCase().indexOf('MAC')>=0;
document.body.style.zoom = getZoomValues()*(window.screen.height)/1080;
document.getElementById('headertext').style.opacity='1';

">

  <div style="height:65%; width:100%;position:absolute;z-index:-1;  overflow:hidden;"id="video">
    <img src="assets/Background.jpg" style="width:100%;">
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
    font-size:50px;
    transition: opacity 2s;
    -webkit-transition: opacity 2s; /* Safari */
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black;"
    >
      <div style="width:50%;">TEENAGE</br>E-CIGARETTE</br>ABUSE</br>PREVENTION</div>
    </div>
    <div style="width:100%;"></div>
  </div>
  <div style = "height:60% ; width:100%;">
    <div style="height:30%; width:100%;font-family: 'Arvo', serif;font-size:300%;text-align:center;color:white;background-color:black;">
  Teenage E-Cigarette use has recently been increasing. What can you do to help fight this?
    </div>
    <div style="height:70%; width:50%;float:left;display:flex;flex-direction:column;align-items:center;">
      <a href="donate.php" class = "weblinks" style="font-family: 'Arvo', serif;font-size:250%"><p class = "mid-icon">Donate</p></a>
          <a href="donate.php" ><img class="indexpics" src="assets/Donate.png"></a>
      <p style="font-family: 'Arvo', serif; font-size:175%; text-align:center;">By donating, you enable us
        to to recruit guest speakers to go to schools and educate about the negative effects of teen drug use. This is the <b>best</b> way you can support us.</p>

    </div>
    <div style="height:70%; width:50%;float:left;display:flex;flex-direction:column;align-items:center;">
      <a href="contact.php#form1" class = "weblinks" style="font-family: 'Arvo', serif;font-size:250%"><p class = "mid-icon">Join Email List</p></a>
        <a href="contact.php#form1" ><img  class="indexpics"  src="assets/Email.png">
        </a>
      <p style="font-family: 'Arvo', serif; font-size:175%; text-align:center;">By joining our email list, you will be notified of semminars you may join and
       how you can help change existing laws that affect access to vape pens and more.</p>
    </div>
  </div>
  <div class  = "middle">
    <div style="height:30%;width:10%; position:absolute;color:white;transform:translate(50%,0%);font-family: 'Arvo', serif;font-size:150%; text-align:center;">
The infographic shown on the side details the large amounts of advertising these E-Cigarette companies do.
    </div>
    <div style = "height:100% ; width:50%;color:white;font-family: 'Arvo', serif;">
<p style="font-size:200%; margin-left: 10%;">Harmful Effects Of Teenage Vaping:<p>
      <ul style="list-style-type:disc;margin-left:10%; font-size:140%">
        <li>Damages brain sections responsible for:
            <ul>
              <li>Learning</li>
              <li>Attention</li>
              <li>Mood</li>
              <li>Impulse Control</li>
            </ul>
        </li>
        <li>Exposes users to harmful chemicals such as:
          <ul>
            <li>Nicotine (extremely addictive)</li>
            <li>Ultrafine Particles (causes scarring of internal lung tissue)</li>
            <li>Volatile Organic Compounds</li>
            <li>Carcinogens</li>
            <li>Flavoring (commonly diacetyl, which is linked to lung disease)</li>
            <li>Heavy metals such as Lead (poisonous)</li>
          </ul>
        </li>
        <li>May increase chance of addiction toward other more harmful drugs
        </li>
      </ul>
      <a href="about.php" class="weblinks" style="color:white !important; margin-left:10%;font-size:125%;"><b>Click here to learn more</b></a>
    </div>
    <div style = "height:100% ; width:50%; display:flex;flex-direction:column;justify-content:space-around;">
      <a href="https://www.cdc.gov/media/images/Releases/2016/p0425-CDC-ecig-marketing.pdf?s_cid=bb-osh-youth-graphic-009" title="Youth Exposure to Advertising and E-Cigarette Use"><img src="https://www.cdc.gov/tobacco/infographics/youth/images/youth-ads-ecigs-700.png?s_cid=bb-osh-youth-image-009" style="width:60%; border:0px;float:right;margin-right:10%;" alt="Youth Exposure to Advertising and E-Cigarette Use" /></a>
    </div>
  </div>
  <div class = "bottom">
    <div id = "bot-top">

    </div>
    <a class="weblinks" href="https://icons8.com/icon/54613/community-grants" style="color:white !important">Community Grants icon by Icons8</a>
  </br>
    <a class="weblinks" href="https://icons8.com/icon/47751/email" style="color:white !important">Email icon by Icons8</a>
  </div>

</body>
</html>
<?php include ('log-ip.php') ?>
