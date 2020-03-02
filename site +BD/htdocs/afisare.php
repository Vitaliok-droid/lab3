  <html>
  <head>
  	<title>Afisare Date</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body{
      background-image:url("plane.jpg");
      background-repeat: no-repeat;
      background-attachment: cover;
      overflow: hidden;
      
      
    }
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
    <?php 
    require('conexiune.php');
    $sql="select * from logare where activ=0";
    $result=$mysqli->query($sql);
    $row=$result->fetch_array();
    if(is_null($row[0])){}else{echo 'div#menu-a{margin-left:0%;} ';}

    ?>
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
     padding-right:0.3%;
     margin-bottom: 17px;
     
   }
   body{
        background-attachment: cover;

      }
   ul#menu-a li a:hover{
    background-color: #66b3ff;
  }
</style>
</head>
<body >

  <div id="menu-a">
    <ul type="square" id="menu-a" align="center">    

     <li> <span id="titlu">Afisarea:</span>
       <li><a href="afisare/afisare_curse.php " target="iframe2" ><span style="visibility: hidden;">|</span>Curse<span style="visibility: hidden;">a</span></a></li>
       <?php       session_start();
       if(!isset($_SESSION["sesiune"])){}
        else{
        echo ' <li><a href="afisare/afisare_clienti.php"target="iframe2" ><span style="visibility: hidden;">|</span>Clienti<span style="visibility: hidden;">|</span></a></li>';} ?>
        <li><a href="afisare/afisare_transport.php"target="iframe2" ><span style="visibility: hidden;">|</span>Transport<span style="visibility: hidden;">|</span></a></li>
        <?php       
        if(!isset($_SESSION["sesiune"])){}
          else{
          echo '<li><a href="afisare/afisare_calatorii.php"target="iframe2" >Calatorii</a></li> 
          ';} ?>

          
        </ul>
        <?php
        if(!isset($_SESSION["sesiune"])){  echo '<a href="logare.php"  id="delogare"  ><img width="35px" height"35px" src="out.png" align="right" style="margin-top:-60px;" ></a>';}
        ?>
      </div>
      <iframe name="iframe2" style="  width: 107%; height:93%;overflow: hidden; border: none;margin-top:-1.9% ;margin-left:-8px;">  

      </iframe>
      
    </body>
    </html>