<?php


?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="zoom_fix.js"></script>
    <meta name="viewport" content="width=1920px,initial-scale=1">
  <title>The Problem</title>
    <link rel="shortcut icon" href="assets/WjGTnKGQ_400x400.png">
  <link href = "stuff.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
</head>

<body onload="

var isMac = navigator.platform.toUpperCase().indexOf('MAC')>=0;
document.body.style.zoom = getZoomValues()*(window.screen.height)/1080;
document.getElementById('headertext').style.opacity='1';">

  <div style="height:65%; width:100%;position:absolute;z-index:-1;  overflow:hidden;"id="video">
    <img src="assets/Problem.jpg" style="width:100%;">
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
    margin:0 auto;
    display: flex;
    width:50%;
    align-items: center;
    font-family: 'Rubik Mono One', sans-serif;
    height:50%;
    font-size:50;
    transition: opacity 2s;
    -webkit-transition: opacity 2s; /* Safari */
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black;">
      THE PROBLEM
    </div>
  </div>
  <div style="font-family: 'Arvo',serif; font-size:300%;display:flex; justify-content:center; align-items:center;background-color:black; color:white;">
    <p>Teenage vaping is an epidemic. Here is some information about it.</p>
  </div>
  <div style="width:50%;height:100%;font-family: 'Arvo',serif;font-size:175%;float:left;color:white;background-color:black;">
    <ul>
    <li>In 2011, only 0.6% and 1.5% of middle school and high school students vape, respectively.</li>
  </br>
  <li>In 2018, 4.9% and 20.8% of middle school and high school students vape, respectively. (8 times as many middle schoolers and 13 times as many high school students)</li>
  </br>
  <li>E-Cigarettes have many nicknames: e-cigs,e-hookahs, hookah pens, vapes, vape pens, and mods</li>
  </br>
  <li>Although vaping is not as harmful as smoking cigarettes, it does expose the body to carcinogens and poisonous heavy metals. Also, they both contain nicotine which adversely affects the way the brain develops</li>
  </br>
  <li>Teenage e-cigarette users are more likely to transition to regular cigarettes, which are responsible for more than 480,000 deaths annualy and chop off on average 10 years of a person's lifetime</li>
  </br>
  <li>The diagram at the bottom of this page shows the different types of e-cigarettes. The most popular forms are the rechargable e-cigarettes since their "flash drive-like" form makes concealment easy</li>
</ul>
</div>
<div style="height:150%;width:100%;color:white;background-color:black;">
<div style="width:50%;height:66.6%;font-family: 'Arvo',serif;font-size:125%;float:left;">
  <div style="margin:5%;display:flex;flex-direction:column;justify-content:center;"><a href="https://www.cdc.gov/tobacco/infographics/youth/pdfs/infographic-ecigs.pdf?s_cid=bb-osh-youth-graphic-007" title="E-cigarette Use Among Youth is Rising as E-cigarette Advertising Grows" style="display:flex; justify-content:center;"><img src="https://www.cdc.gov/tobacco/infographics/youth/images/infographic-ecigs-sml.jpg?s_cid=bb-osh-youth-image-007" style="width:536px; height:260px; border:0px;" alt="E-cigarette Use Among Youth is Rising as E-cigarette Advertising Grows" /></a>
    <p style="text-align:center;">The graph above diplays the positive coorelation between E-Cigarette advertising and E-Cigarette use in teenagers. The addtional sales are a clear incentive for these companies.</p>
  </div>
  <div style="margin:5%;display:flex;flex-direction:column;justify-content:center;">
    <a href="https://www.cdc.gov/tobacco/infographics/youth/pdfs/vs-infographic-2018-p.pdf?s_cid=bb-osh-youth-graphic-008" title="Tobacco Product Use Among High School Students – 2018" style="display:flex; justify-content:center;"><img src="https://www.cdc.gov/tobacco/infographics/youth/images/vs-tobacco-use-teens-700.jpg?s_cid=bb-osh-youth-image-008" style="width:700px; height:363px; border:0px;" alt="Tobacco Product Use Among High School Students – 2018" /></a>
    <p style="text-align:center;">The graph above diplays the popular forms of tobacco consumption among high school students. Vaping is the most popular as of 2018</p>
  </div>
</div>
<img src="assets/ecig-image.jpg" style="width:80%;margin-left:10%; float:left;">
</br>
<a href="https://www.cdc.gov/tobacco/data_statistics/fact_sheets/youth_data/tobacco_use/index.htm" style="float:right; width:20%;text-align:right;margin-right:5%;">Source:CDC</a>
</div>
<div style="width:100%;height:10%;font-family: 'Arvo', serif;font-size:200%;">
  <p style="width:90%;height:80%;margin-left:5%;text-align:center;"><b>The bottom line is teenage vaping is detrimental toward their health. Something must be done.</b><p>
</div>

</body>


</html>
