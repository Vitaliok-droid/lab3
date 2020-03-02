<?php
session_start();
if(!isset($_SESSION["sesiune"])){
 header("Location: logare.php");
}else{
  ?>

  <html>
  <head>
   <title>Stergere Date</title>
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
      background-attachment: cover;
 overflow: hidden;

      margin-right:0%;
      
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
      margin-left: -15px;
      margin-right: -100px;
      padding-right: 50px;
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
  <?php    $_SESSION['sesiune'];     ?>  
  <div id="menu-a">
    <ul type="square" id="menu-a" align="center">   
     <li>  <span id="titlu">Stergerea:</span>       
       <li><a href="stergere/stergere_curse.php"  target="iframe4"><span style="visibility: hidden;">|</span>Curse<span style="visibility: hidden;">a</span></a></li>
       <li><a href="stergere/stergere_clienti.php" target="iframe4"><span style="visibility: hidden;">|</span>Clienti<span style="visibility: hidden;">|</span></a></li>
       <li><a href="stergere/stergere_transport.php" target="iframe4"><span style="visibility: hidden;">|,</span>Transport<span style="visibility: hidden;">|</span></a></li>
       <li><a href="stergere/stergere_calatorii.php" target="iframe4">Calatorii</a></li>          
     </ul>
   </div>
   <div id="frame4">
    <iframe name="iframe4">  
    </iframe>
  </div>
</body>
</html>
<?php
}
?>