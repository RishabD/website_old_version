<?php
$ipaddress = $_SERVER['REMOTE_ADDR'];
$webpage = $_SERVER['SCRIPT_NAME'];
$timestamp = date('d/m/Y h:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$link=mysqli_connect("localhost","","","");
 if(mysqli_connect_error()){
   die(" There was an error in accesing data from database.");
 }
 $query = "INSERT INTO `iplog` (`ip`,`date`,`webpage`,`browser`)
  VALUES ('".mysqli_real_escape_string($link,$ipaddress)."',
  '".mysqli_real_escape_string($link,$timestamp)."',
  '".mysqli_real_escape_string($link,$webpage)."',
  '".mysqli_real_escape_string($link,$browser)."')";
 mysqli_query($link, $query);


 /*
 <div class = "bottom">
   <div id = "bot-top">
     <b>
       TERMS OF USE
     </b>
   </div>
 </div>
 */
?>
