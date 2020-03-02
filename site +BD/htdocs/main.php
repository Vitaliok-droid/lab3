
<?php
session_start();
if(!isset($_SESSION["sesiune"])){
 header("Location: logare.php");
}
else
{
  ?>
  <html>
  <head>
    <title>Pagina Principala</title>
    
    <style>
     @media(min-width: 800px) {
      ul#menu{
        padding-top:1%;
      }
      ul#menu li a{
        padding: 10px 6px;
       margin-right: 0px;
       background-color:#99cc00;
       text-decoration:none;
       border-radius:10px 10px 10px 10px;
       color:black;
     }  
   }

 }
 html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}

body{
  background-image:url("plane.jpg");
  background-repeat: no-repeat;
  background-attachment: cover;
  margin: 0;
  width: 100%
  height:100%;
  margin-right:0%;
  
}

ul#menu{
 list-style:none;

 list-style-position: fixed;
 margin-bottom: 0%;
  padding-top:1.5%;

}

ul#menu li a{

 padding: 8px 8px;

 margin-right: 0px;
 background-color:#005fcc;
 text-decoration:none;
 color:black;
 border-radius:10px 10px 10px 10px;
 color: white
 

}  
ul#menu li a:hover{
  background-color: #1a85ff;
} 

ul#menu li{
 border: 0px solid #99cc00; 
 display: inline-block;
 float:left right;
 padding-right:1%;
     margin-bottom: 17px;
}

img.out{
  width: 30px;
  height: 30px;
  margin-top:-60px;

}
div.i1 iframe.i1{
  width:100%;
  overflow: hidden;
   border:none;
   width: 100%;
   height: 100%;
    overflow: hidden; 
    border: none;
}
</style>
<link type="text/css" rel="stylesheet"  href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div id="menu">
  <ul type="square" id="menu" align="center"> 

   <?php
            // require('conexiune.php');
             //$sql="select * from logare where activ=1";
             //$result=$mysqli->query($sql);
            // $row=$result->fetch_array();
           //if(is_null($row[0])){require('afisare.php');}
   if(!isset($_SESSION["sesiune"])){header("Location: logare.php");}
   else{
     echo "<form action=\"main.php\" method=\"POST\">
            <li><a href=\"afisare.php\" target=\"iframe\">Afisare</a></li>
            <li><a href=\"inserare.php\"target=\"iframe\">Inserare</a></li>
            <li><a href=\"modificare.php\"target=\"iframe\">Modificare</a></li>
            <li><a href=\"stergere.php\"target=\"iframe\">Stergere</a></li>
            <li><a href=\"rapoarte.php\"target=\"iframe\">Rapoarte</a></li>
            </form> </ul><a href=\"delogare.php\"  id=\"delogare\"  ><img class=\"out\" src=\"out.png\" align=\"right\"style=\"\" ></a>";
   $_SESSION['sesiune'];
           // if(isset($_POST['delog'])){
            //  require('conexiune.php');
           //  $sql="select * from logare where activ=1";
           //  $result=$mysqli->query($sql);
           //  $row=$result->fetch_array();
            // if(is_null($row[0])){}{
           //     $url='index.html';
            //    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
             // }
            //  $sql="update logare set activ=0 where activ=1";
             //  $result = $mysqli->query($sql);
           // 
 }
 ?>
</ul>
</div>
<div style="width: 100%; height:100%" class="i1">
  <iframe name="iframe" class="i1" src="start.php">  

  </iframe>
</div>
</body>
</html>
<?php
}
?>
