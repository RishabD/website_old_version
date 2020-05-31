<?php


?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="zoom_fix.js"></script>
    <meta name="viewport" content="width=1920px, initial-scale=1">
  <link rel="shortcut icon" href="assets/WjGTnKGQ_400x400.png">
  <title>What We Do</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
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
    -webkit-transition: opacity 2s; /* Safari */
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black;
    ">
      WHAT WE DO
    </div>

  </div>
  <div style="width:100%;font-family: 'Arvo', serif;font-size:175%;font-weight:bold; border-top-style: solid;border-right-style: none; border-bottom-style: solid;
  border-left-style:none; border-width:2px;">
    <p style="text-align:center;margin-left:5%; margin-right:5%;">Our goal is very simple: Raise awareness towards the accessibility of Vape products as well as advocate for a change in the regulation of such products.</p>
  </div>
  <div style="background-color:black; color:white; width:50%; height:60%;font-family: 'Arvo', serif;font-size:125%;float:left;">
  </br>
    <p style="margin-left:2%;margin-right:2%;">6 Step Plan :</p>
    <ol style="margin-left:4%;margin-right:4%;padding-left:0%;">
      <li>Host seminars that will be given by our approved doctors who understand the dangers of vape</li></br>
      <li>Create relationships between parents and other adults in order to raise awareness about the Vape epidemic.</li></br>
      <li>Get support for the movement with signatures and donations made by the community in order to advocate for change within policy. </li></br>
      <li>Talk with media and advertise the cause through different news outlets and social media applications.</li></br>
      <li>Speak with lawmakers in order to enter our proposed changes to the e-cigarette regulations to the upcoming 2020 propositions in California.</li></br>
      <li>Commit to the long term in allowing for underaged individuals to be less exposed
        to addictive drugs such as nicotine, cleansing the community step by step. </li></br>
    </ol>
  </div>
  <div style="width:50%;height:60%;float:left;font-family: 'Arvo', serif;font-size:125%">
    <p style="margin-left:4%;margin-right:4%;">The Process:</p>

    <p style="margin-left:4%;margin-right:4%;">We will contact high school principals (first starting in San Francisco Bay Area since that is where we are based)
    to arrange a slot so our guest speakers can perform seminars and spread information to parents. We will also be
    vocal on our social media pages. Current methods of advocating that the governemnet employs are through
    advertisements, many of which are simply ignored. Personally meeting and informing parents will have a far
    more profound impact on the information they retain, thus making it more worth while to.
  </p style="margin-left:4%;margin-right:4%;">

    <p style="margin-left:4%;margin-right:4%;">Passing Legislation:</p>
    <p style="margin-left:4%;margin-right:4%;">In 2020, our goal is to have a bill passed restricting vapes. First, we need a representative to sponsor the bil. The bill is then assigned to a
    committee for study. If released by the committee, the bill is put on a calendar to be voted on, debated or amended. If the bill passes by simple
    majority (218 of 435), the bill moves to the Senate.
  </p>
  </div>
</body>


</html>
