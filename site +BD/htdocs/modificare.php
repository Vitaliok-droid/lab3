<?php
session_start();
if(!isset($_SESSION["sesiune"])){
 header("Location: logare.php");
}else{
  ?>

  <html>
  <head>
   <title>Modificare Date</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <style>
     html {
      font-family: sans-serif;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }
    ul#menu-a{
     list-style:none;
     padding: 0px;
     list-style-position: fixed;
     margin-top: 1.5%;

   }
    body{
      background-image:url("plane.jpg");
      background-repeat: no-repeat;
 overflow: hidden;

      margin-right:0%;      background-attachment: cover;

      
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
  margin-left: -8px;    
  width: 106%;
  height: 90%;
  overflow: hidden;
  border: none;
}
ul#menu-a li a:hover{
  background-color: #66b3ff;
}
</style>
</head>
<body >
  <?php 
  $_SESSION['sesiune'];
  ?>   
  <div id="menu-a">
    <ul type="square" id="menu-a" align="center">  
     <li> <span id="titlu">Modificarea:</span>        
       <li><a href="modificare/modificare_curse.php"  target="iframe3"><span style="visibility: hidden;">|</span>Curse<span style="visibility: hidden;">a</span></a></li>
       <li><a href="modificare/modificare_clienti.php" target="iframe3"><span style="visibility: hidden;">|</span>Clienti<span style="visibility: hidden;">|</span></a></li>
       <li><a href="modificare/modificare_transport.php" target="iframe3"><span style="visibility: hidden;">|</span>Transport<span style="visibility: hidden;">|</span></a></li>
       <li><a href="modificare/modificare_calatorii.php" target="iframe3">Calatorii</a></li>
       
     </ul>
   </div>
   
    <iframe name="iframe3">  

    </iframe>
  

</body>
</html>
<?php
}
?>