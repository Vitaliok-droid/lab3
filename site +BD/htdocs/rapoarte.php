<?php
session_start();
if(!isset($_SESSION["sesiune"])){
header("Location: logare.php");
}else{
?>

<html>
<head>
	<title>Rapoarte</title>
  <style>
    html {
      font-family: sans-serif;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }
    body{
      background-image:url("plane.jpg");
      background-repeat: no-repeat;
      background-attachment: cover;

      overflow: hidden;
      margin-right:0%;
      
    }
   ul#menu-a{
    list-style:none;
    padding: 0px;
    list-style-position: fixed;
    margin-top: 1%;
  }
  ul#menu-a li a{
   padding: 8px 8px;
     margin-right: 0px;
     background-color:#3399ff;
     text-decoration:none;
     border-radius:10px 10px 10px 10px;
     color:black;
 }   
 ul#menu-a li{
   border: 0px solid green; 
   display: inline-block;
    padding-right:1%;
     margin-bottom: 17px;
 }
 iframe{
 	width: 107%;
 	height:90%;
 	margin-left: -8px;
 	overflow: hidden;
   border: none;
 }
 ul#menu-a li a:hover{
  background-color:#66b3ff;
}
</style>
</head>
<body >
  <?php    $_SESSION['sesiune'];     ?>  
  <div id="menu-a" align="center">
    <ul type="square" id="menu-a" align="center">    
     <li> <span id="titlu">Afisarea:</span>  
       <li><a href="rapoarte/calatorii_clienti.php " target="iframe2" >Nr.de calatorii -> Clienti</a></li>
       <li><a href="rapoarte/calatorii_transport.php" target="iframe2" >Nr.de calatorii -> Transport</a></li>
       <li><a href="rapoarte/calatorii_curse.php"target="iframe2" >Nr.de calatorii -> Curse</a></li>
       
     </ul>
     <iframe name="iframe2">  

     </iframe>
   </body>
   </html>
   <?php
 }
 ?>